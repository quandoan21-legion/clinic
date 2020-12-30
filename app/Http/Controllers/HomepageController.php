<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
    	return view('homepage.index');
    }

    public function session_index(){
    	return view('homepage.homepage_after_login.index');
    }

}
