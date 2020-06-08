<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RoomController extends Controller
{
    //
    public function addRoom(){

		$user = [
			'room_number' => Str::random(6),
			'room_id' => Str::random(6),
			'room_type'=> Str::random(5),
			'room_floor' => rand(10000,100000),
		];


	    $database = $this->initDB() ;

	    $data = $database->getReference('room')->getSnapshot()->getValue();


        if(!$data){//checking if $data is empty
            $data = $database->getReference('room')->push([

                //'key' => 'value'
            	'room_number' => $user['room_number'],
                'room_id' =>$user['room_id'],
                'room_type' => $user['room_type'],
                'room_floor' =>$user['room_floor']
	        ]);

            return "success";
        }else{
                foreach($data as $item){
                if($item['room_id'] == $user['room_id']){
                    return "failure";
                }else{

                    $data = $database->getReference('room')->push([
                        'room_number' => $user['room_number'],
                        'room_id' =>$user['room_id'],
                        'room_type' => $user['room_type'],
                        'room_floor' =>$user['room_floor']
			        ]);

                return "success success";
                }
            }
        }

    }
    public function showRoom(){
        $database = $this->initDB();
        $data = $database->getReference('room')->getValue();

         foreach($data as $item){
            $all_room[]=$item;
        }
        return view('dashboard.showroom',compact('all_room')) ;
    }


}
