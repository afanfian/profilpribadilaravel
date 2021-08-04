<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home',[
        "title"=> "Home",
    ]);
});

Route::get('/About', function () {
    return view('About', [ 
        "title"=> "About",
        "nama" => "Fian Awamiry Maulana",
        "email" => "afanfian14@gmail.com",
        "image" => "Aku.JPG"
    ]);

});

Route::get('/Certificate', function () {
    return view('Certificate', [ 
        "title"=> "Certificate",
        "nama" => "Magstorm Competition Certificate",
        "image" => "Best Paper.png"
    ]);
});


Route :: get('/Blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController :: class, 'show']);