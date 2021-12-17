<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    use HasFactory;

    protected $connection = 'mysql_laravel';

    // protected $filleble = ['id'];
    protected $guarded = ['id'];



    public function posts(){
    	return $this->hasMany(ModelPost::class, 'category_id');
    }
}
