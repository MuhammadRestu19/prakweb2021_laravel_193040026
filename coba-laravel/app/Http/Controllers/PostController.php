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

    public function show(\App\Models\Post $post)
    {
        return view('post',[
            "title" => "single post",
            "post" => $post
        ]);
    }
}
