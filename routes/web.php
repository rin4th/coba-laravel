<?php

use Faker\Provider\Lorem;
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

Route::get('/blog', function () {
$blog_post = [
    [
        "judul" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Rizal Nur",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus sit amet risus id aliquam. Fusce efficitur erat quis fermentum finibus. Quisque quis lobortis arcu, eget placerat arcu. Morbi ornare est turpis, et iaculis libero vulputate eget. Donec accumsan, dolor vel bibendum scelerisque, magna mi tempor odio, sed aliquet arcu nunc id lectus. Duis et tortor ut quam vestibulum ullamcorper at vitae ipsum. Praesent pellentesque nisi orci, vitae mollis metus egestas a."
    ],
    [
        "judul" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Sandhika Galih",
        "body" => "Cras hendrerit non tellus a ornare. Quisque varius tincidunt lectus nec pharetra. Fusce vulputate libero ac ipsum finibus, sit amet venenatis magna scelerisque. Curabitur varius, sapien a luctus mattis, enim eros laoreet augue, eu gravida dui elit nec diam. Ut blandit lobortis sapien nec ornare. Quisque at nunc nisl. Nulla cursus hendrerit risus, non faucibus mi tincidunt vel. Duis sit amet dolor et velit malesuada placerat. Mauris malesuada, diam at cursus ullamcorper, augue felis ullamcorper sapien, vitae convallis nisi felis sit amet quam. Sed a accumsan nisl. Sed in vestibulum ante, eu malesuada mi."
    ]
];
    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
});

Route::get('blog/{slug}', function($slug){
$blog_post = [
    [
        "judul" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Rizal Nur",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus sit amet risus id aliquam. Fusce efficitur erat quis fermentum finibus. Quisque quis lobortis arcu, eget placerat arcu. Morbi ornare est turpis, et iaculis libero vulputate eget. Donec accumsan, dolor vel bibendum scelerisque, magna mi tempor odio, sed aliquet arcu nunc id lectus. Duis et tortor ut quam vestibulum ullamcorper at vitae ipsum. Praesent pellentesque nisi orci, vitae mollis metus egestas a."
    ],
    [
        "judul" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Sandhika Galih",
        "body" => "Cras hendrerit non tellus a ornare. Quisque varius tincidunt lectus nec pharetra. Fusce vulputate libero ac ipsum finibus, sit amet venenatis magna scelerisque. Curabitur varius, sapien a luctus mattis, enim eros laoreet augue, eu gravida dui elit nec diam. Ut blandit lobortis sapien nec ornare. Quisque at nunc nisl. Nulla cursus hendrerit risus, non faucibus mi tincidunt vel. Duis sit amet dolor et velit malesuada placerat. Mauris malesuada, diam at cursus ullamcorper, augue felis ullamcorper sapien, vitae convallis nisi felis sit amet quam. Sed a accumsan nisl. Sed in vestibulum ante, eu malesuada mi."
    ]
];
    
    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "article" => $new_post
    ]);
});
