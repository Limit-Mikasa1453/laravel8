<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelHome;

class ControllerHome extends Controller
{
    public function index(){
    	return view('home', ModelHome::menuHome());
    }

}
