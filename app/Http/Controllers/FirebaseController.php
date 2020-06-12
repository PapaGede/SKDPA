<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Log;

class FirebaseController extends Controller
{
    //
    public function register(Request $request){

    	$validator = Validator::make($request->all(), [
    		'name' => 'required|string',
    		'porter_id' => 'required|string',
		    'email' => 'required|email',
	        'mobile_number' => 'required|string',
	        'password' => 'required',
	        'confirm_password' => 'required|same:password',
	    ]);

	    if ($validator->fails()) {
	    	Log::warning("Validation failed ".$validator->errors());
	    	return "validation failed ".$validator->errors();
		}

		$hashForamt = "$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hash_and_salt = $hashForamt . $salt;


		$user = [
			'name' => $request->name,
			'porter_id' => $request->porter_id,
			'email'=> $request->email,
			'mobile_number' => $request->mobile_number,
			'password' => crypt($request->password, $hash_and_salt),
			'confirm_password' => crypt($request->confirm_password,$hash_and_salt)
		];

		if($user['password'] == $user['confirm_password']){

	    	$database = $this->initDB() ;

	        $data = $database->getReference('porter')->getSnapshot()->getValue();


	        if(!$data){//checking if $data is empty
	            $data = $database->getReference('porter')->push([

	                //'key' => 'value'
	            	'name' => $user['name'],
	                'porter_id' =>$user['porter_id'],
	                'email' => $user['email'],
	                'mobile_number' => $user['mobile_number'],
	                'password' => $user['password']
		        ]);

	            return "success";
	        }else{
	                foreach($data as $item){
	                if($item['porter_id'] == $user['porter_id']){
	                    return "failure";
	                }else{

	                    $data = $database->getReference('porter')->push([
	                    'name' => $user['name'],
		                'porter_id' =>$user['porter_id'],
		                'email' => $user['email'],
		                'mobile_number' => $user['mobile_number'],
		                'password' => $user['password']
			        ]);

	                return "success success";
	                }
	            }
	        }
		}
	}
}
