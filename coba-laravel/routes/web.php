<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "title" => "home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "anout",
        "active" => "about",
        "name" => "Muhammad Restu",
        "email" => "muhammadrestu1909@gmail.com",
        "image" => "unpas.png"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);



Route :: get('posts/{post:slug}',[PostController::class, 'show']);

Route :: get('/categories', function(){
    return view('cayegory', [
        'title'=> 'Post Categories',
        "active" => "categories",
        'categories'=> Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title'=>"Post By Category : $category->name",
        "active" => "categories",
        'posts'=> $category->posts->load('category', 'author')
    ]);
});

route::get('/authors/{author:username}' , function(User $author){
    return view('posts', [
        'title'=> "Post By Author : $author->name",
        "active" => "post",
        'posts'=> $author->posts->load('category','author')
    ]);
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');