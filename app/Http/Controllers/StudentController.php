<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class StudentController extends Controller
{
    //
    public function randomStudent(){

		$user = [
			'name' => Str::random(6),
			'std_id' => Str::random(6),
			'dob'=> Carbon::now()->toDateString(),
			'phone' => rand(10000,100000),
			'email' => Str::random(7)."@mail.com",
			'biometric_data' => Str::random(10),
            'program_name' => Str::random(6),
            'room_number' => Str::random(6),
		];


	    $database = $this->initDB() ;

	    $data = $database->getReference('student')->getSnapshot()->getValue();


        if(!$data){//checking if $data is empty
            $data = $database->getReference('student')->push([

                //'key' => 'value'
            	'name' => $user['name'],
                'std_id' =>$user['std_id'],
                'dob' => $user['dob'],
                'email' => $user['email'],
                'biometric_data' => $user['biometric_data'],
                'program_name' =>	$user['program_name'],
                'room_number' => $user['room_number']
	        ]);

            return "success";
        }else{
                foreach($data as $item){
                if($item['std_id'] == $user['std_id']){
                    return "failure";
                }else{

                    $data = $database->getReference('student')->push([
	                    'name' => $user['name'],
		                'std_id' =>$user['std_id'],
		                'dob' => $user['dob'],
		                'email' => $user['email'],
		                'biometric_data' => $user['biometric_data'],
                        'program_name' =>	$user['program_name'],
                        'room_number' => $user['room_number']
			        ]);

                return "success success";
                }
            }
        }
    }
    public function showStudent(){
        $database = $this->initDB();
        $data = $database->getReference('student')->getValue();

         foreach($data as $item){
            $all_student[]=$item;
        }
        return view('dashboard.showstudent',compact('all_student')) ;
    }

}
