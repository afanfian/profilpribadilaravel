<?php

namespace App\Models;



class Post 
{
    private static $blog_posts= [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afan Awamiry Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident fuga atque tempore mollitia veniam delectus deleniti tempora laudantium illo! Omnis nesciunt consectetur culpa quia labore excepturi ullam perferendis cum tempore, eaque ab consequuntur sequi reprehenderit corporis quae maiores at officiis suscipit esse sunt laudantium a recusandae. Quo ab quisquam sit laboriosam, harum perferendis perspiciatis quod cumque dignissimos? Tempore autem est dolore quibusdam maiores culpa sit cumque distinctio necessitatibus? Deleniti dolore rem accusantium, doloribus quaerat omnis expedita facere ad numquam? Facere, alias molestiae illum rerum incidunt illo. Recusandae dolores praesentium quaerat nam at similique totam pariatur odit itaque amet, id veritatis?",
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Afan Awamiry Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident fuga atque tempore mollitia veniam delectus deleniti tempora laudantium illo! Omnis nesciunt consectetur culpa quia labore excepturi ullam perferendis cum tempore, eaque ab consequuntur sequi reprehenderit corporis quae maiores at officiis suscipit esse sunt laudantium a recusandae. Quo ab quisquam sit laboriosam, harum perferendis perspiciatis quod cumque dignissimos? Tempore autem est dolore quibusdam maiores culpa sit cumque distinctio necessitatibus? Deleniti dolore rem accusantium, doloribus quaerat omnis expedita facere ad numquam? Facere, alias molestiae illum rerum incidunt illo. Recusandae dolores praesentium quaerat nam at similique totam pariatur odit itaque amet, id veritatis?",
        ]
    ];
    public static function all(){
        return collect (self :: $blog_posts);//ngambil ke atas
    }
    public static function find ($slug){
        $posts = static :: all();//ngambil ke public static function all
        return $posts -> firstWhere('slug', $slug);
    }
}    