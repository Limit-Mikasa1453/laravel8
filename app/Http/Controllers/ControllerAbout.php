<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelAuthor;

class ControllerAbout extends Controller
{
    public function index(){
    	$author = ModelAuthor::all();
    	return view('about', $author);
    }
}
