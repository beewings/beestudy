<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeestudyController extends Controller
{
    public function home()
    {
    	return view('beestudy.home');
    }
    public function chinhsachbaomat()
    {
    	return view('beestudy.chinhsachbaomat');
    }
    public function register()
    {
    	return view('beestudy.register');
    }
    public function login()
    {
        return view('beestudy.login');
    }
    public function dieukhoansudung()
    {
        return view('beestudy.dieukhoansudung');
    }
    public function thithu()
    {
        return view('beestudy.thithu');
    }
}
