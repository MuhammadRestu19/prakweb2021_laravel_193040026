<?php

namespace App\Models;


class Post 
{
   private static $blog_posts =  [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

    return $posts->firstWhere('slug', $slug);
    }
}
