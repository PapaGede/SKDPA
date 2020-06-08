<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function index()
    {
        return view('dashboard.index');
    }
    public function getStudent(){
        return view('dashboard.showstudent');
    }

    public function getRoom(){
        return view('dashboard.showroom');
    }

    public function getAnnouncement(){
        return view('dashboard.createAnnouncement');
    }

    public function showAnnouncement(){
        return view('dashboard.showAnnouncement');
    }
}
