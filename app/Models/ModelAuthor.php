<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAuthor 
{
    private static $author = [
    	"title" => "About",
    	"active" => "about",
    	"name" 	=> "Limit Mikasa",
    	"email"	=> "limit-mikasa1453@gmail.com",
    	"image"	=> "img/mikasa.jpeg"
    ];

 	public static function all(){
 		return collect(self::$author);
 	}
}
