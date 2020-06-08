<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProgramController extends Controller
{
    //
    public function randomProg(){

		$user = [
			'program_name' => Str::random(6),
		];


	    $database = $this->initDB() ;

	    $data = $database->getReference('programs')->getSnapshot()->getValue();


        if(!$data){//checking if $data is empty
            $data = $database->getReference('programs')->push([

                //'key' => 'value'
            	'program_name' => $user['program_name'],
	        ]);

            return "success";
        }else{
                foreach($data as $item){
                if($item['program_name'] == $user['program_name']){
                    return "failure";
                }else{

                    $data = $database->getReference('programs')->push([
	                    'program_name' => $user['program_name'],
			        ]);

                return "success success";
                }
            }
        }
    }
}
