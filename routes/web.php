<?php

use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rizal Nur",
        "email" => "rizalnur@gmail.com",
        "univ" => "Telkom University",
        "image" => "uruma.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        "title" => $category->name,
        "slug" => $category->slug,
        "categories" => $category
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Category",
        "categories" => Category::all()
    ]);
});
