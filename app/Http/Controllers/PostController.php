<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        return view ('posts', [
            "title" => "Posts",
            "posts" => Post::all()//untuk route ke Post.php 
        ]);
    }
    public function show(Post $post){
        return view('post', [ 
            "title" => "single post",//judul dari halamannya
            "post" => $post
            ]);
    }
}
