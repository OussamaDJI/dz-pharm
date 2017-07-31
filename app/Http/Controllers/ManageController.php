<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //
    //This method is to redirect from /manage to /manage/dashboard
    public function index(){
        return redirect()->route('manage.dashboard');
    }

    //redirect to /manage/dashboard
    public function dashboard(){
        return view('manage.dashboard');
    }
}
