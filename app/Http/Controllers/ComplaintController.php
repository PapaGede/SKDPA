<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    //
    public function showcomplaint(){
        $database = $this->initDB();
        $data = $database->getReference('Complaints')->getValue();

         foreach($data as $item){
            $all_complaint[]=$item;
        }
        return view('dashboard.showcomplaint',compact('all_complaint')) ;
    }
}
