<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPost;
use App\Models\ModelPost;
use App\Models\ModelCategory;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ControllerHome@index');

Route::get('/about','ControllerAbout@index');

Route::get('/posts', [ControllerPost::class, 'index']);

// halaman single post
route::get('posts/{post:slug}','ControllerPost@show');

route::get('/categories', function(){
	return view('categories', [
		'title' => 'Post Categories',
		'active' => 'categories',
		'categories' => ModelCategory::all()
	]);
});

route::get('/categories/{category:slug}', function(ModelCategory $category){
	return view('posts', [
		'title' => "Post By Category : $category->name",
		'active' => 'categories',
		'posts' => $category->posts->load('category','author')
	]);
});

route::get('/authors/{author:username}', function(User $author){
	return view('posts', [
		'title' => "Post By Author : $author->name",
		'active' => 'posts',
		'posts' => $author->posts->load('category','author')
	]);
});


Route::get('/siswa', 'ControllerSiswa@index');
Route::get('/siswa/export_excel', 'ControllerSiswa@export_excel');
