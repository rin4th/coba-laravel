<?php

namespace App\Models;


class Post{
    private static $blog_post = [
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

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        return static::all()->firstWhere('slug', $slug);
    }

}
