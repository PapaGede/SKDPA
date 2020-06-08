<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function initDB(){
        //new method
        $firebase = (new Factory)->withServiceAccount(__DIR__.'/firebase.json');
        $database = $firebase->createDatabase();

        return $database;
    }
    public function getAnnouncement(){
        return view('dashboard.createAnnouncement');
    }
    //  public function fireAuth(){
    //     //new method
    //     $firebase = (new Factory)->withServiceAccount(__DIR__.'/firebase.json');
    //     $auth = $firebase->getAuth();

    //     return $auth;
    // }
}
