<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
      
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in '. $category;
        }
        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = ' by '. $author;
        }
        return view('posts',[
            "title" => "All Posts" . $title,
            "active" => "posts",
            // "posts"=>Post::all()
            "posts" => \App\Models\Post ::latest()->filter(request(['search','category','author']))->get()
            ->paginate(7)->withQueryString()
        ]);
    }

    public function show(\App\Models\Post $post)
    {
        return view('post',[
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
