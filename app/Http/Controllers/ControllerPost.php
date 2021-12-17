<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPost;

class ControllerPost extends Controller
{
    public function index(){
    	return view('posts', [
    	"title" => 	"All Posts",
        "active" => "posts",
    	// "posts"	=>	ModelPost::all()
        "posts" =>  ModelPost::latest()->get()
    ]);
    }

    // variable $post harus sama dengan web route
    // routes model binding
    public function show(ModelPost $post){
    	return view('post', [
			"title"	=> "Single Post",
            "active" => "posts",
			// "post"	=> ModelPost::find($slug)
            "post"  => $post
		]);
    }
}
