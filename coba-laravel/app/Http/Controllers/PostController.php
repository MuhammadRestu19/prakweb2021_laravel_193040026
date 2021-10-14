<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "title" => "posts",
            "posts" => \App\Models\Post ::all()
        ]);
    }

    public function show($slug)
    {
        return view('post',[
            "title" => "single post",
            "post" => \App\Models\Post::find($slug)
        ]);
    }
}
