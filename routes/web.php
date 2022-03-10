<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index'])
;
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Biansyahrahiidin",
        "email" => "biansyahrahiddin@gmail.com" ,
        "image" => "hpu.png"
]);
});
Route::get('/blog', function () { 
    return view('blog',[
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

//halaman single post
Route::get('/post',[PostController::class,'index']);
Route::get('/post/post:slug}',[PostController::class,'show']);
Route::get('posts/{post:slug}',function($id){

    return view('post',[
        "title" => "Single Post",
        "post" => Post::find($id)

    ]);
});
Route::get('/pegawai/{nama}', 'PegawaiController@index');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

