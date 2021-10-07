<?php

use Illuminate\Support\Facades\Route;

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
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "anout",
        "name" => "Muhammad Restu",
        "email" => "muhammadrestu1909@gmail.com",
        "image" => "unpas.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama" ,
            "author" => "Muhammad Restu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua" ,
            "author" => "aji fattah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
    ];
    
    return view('posts',[
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});



route :: get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama" ,
            "author" => "Muhammad Restu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua" ,
            "author" => "aji fattah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
    ];
    $new_post =[];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "single post",
        "post" => $new_post
    ]);
});
