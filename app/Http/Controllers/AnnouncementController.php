<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Log;
use Carbon\Carbon;

class AnnouncementController extends Controller
{

    public function createAnnouncement(Request $r){
    	$validator = Validator::make($r->all(), [
		    'title' => 'required|string',
	        'message' => 'required',
	    ]);

	    if ($validator->fails()) {

			Log::warning("validation failed");
			return $validator->errors();
		}

		$user = [
			'title' => $r->title,
			'announcement_id' => Str::random(4),
            'sender' => auth()->user()->name,
            'date'=> Carbon::now()->toDateString(),
            'time'=> Carbon::now()->toTimeString(),
			'message' => $r->message
		];

		$database = $this->initDB();

		$data = $database->getReference('announcements')->getSnapshot()->getValue();

		if(!$data){
			$data = $database->getReference('announcements')->push([

                //'key' => 'value'
            	'sender' => $user['sender'],
                'announcement_id' =>$user['announcement_id'],
                'title' => $user['title'],
                'date' => $user['date'],
                'time' => $user['time'],
                'message' => $user['message']
	        ]);

	        return view('dashboard.createAnnouncement')->with('data',$data);
		}

		foreach ($data as $item) {
			if($item['announcement_id'] == $user['announcement_id']){
				return "failure";
			}

			$data = $database->getReference('announcements')->push([

                //'key' => 'value'
            	'sender' => $user['sender'],
                'announcement_id' =>$user['announcement_id'],
                'title' => $user['title'],
                'date' => $user['date'],
                'time' => $user['time'],
                'message' => $user['message']
	        ]);

	        return view('dashboard.createAnnouncement')->with('data',$data);
		}
    }
    public function showAnnouncement(){
        $database = $this->initDB();
        $data = $database->getReference('announcements')->getValue();

         foreach($data as $item){
            $all_announce[]=$item;
        }
        return view('dashboard.showAnnouncement',compact('all_announce')) ;
    }

}
