<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHome
{
    private static $menu = [
		"title" 	=> "Home",
		"active" => "home"
	];

 	public static function menuHome(){
		$menu = collect(self::$menu);
		return $menu;
	}
}
