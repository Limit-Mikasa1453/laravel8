<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPost extends Model
{
	// auto manggil table berdasarkan file di database/migrations
    use HasFactory;

    protected $connection = 'mysql_laravel';

    protected $with = ['category', 'author'];

    // protected $fillable = ['title','excerpt','body'];

    // $guarded adalah kollom yg tidak boleh di insert selain tiu boleh atau kebalikan $fillable
    protected $guarded = ['id'];

    // protected $primaryKey = 'id';

    // ModelPost berelasi dengan MdelCategory | one to one
    public function category(){
    	return $this->belongsTo(ModelCategory::class, 'category_id');
    }

    public function author(){
    	return $this->belongsTo(User::class, 'user_id');
    }


}
