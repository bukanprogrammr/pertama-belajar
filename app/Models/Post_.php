<?php

namespace App\Models;

use League\CommonMark\Normalizer\SlugNormalizer;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dzikriansah Djafar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam distinctio iusto impedit deserunt sapiente. Veritatis odit quod, nisi cum excepturi dicta obcaecati sequi ipsa quae voluptatem, eligendi a! Error molestiae atque ipsum sed id, delectus, debitis vero nulla ex similique corrupti laboriosam facilis inventore doloribus sequi neque tempore itaque ipsam"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Huan Azizah Rahim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda pariatur, repellendus ut ex deserunt labore odio suscipit voluptatem ad ullam cupiditate quisquam inventore nihil natus voluptas voluptatum ea nobis quod aut minus porro provident facilis esse architecto. Odit facilis distinctio alias reprehenderit id voluptates quas, facere molestiae sunt nobis expedita, ad corporis molestias? Explicabo illo vitae molestias quia quasi. Impedit ab quis eaque debitis voluptatum, labore delectus harum id deleniti rem consequuntur placeat odit. Laborum, mollitia! Quas id, aperiam impedit eveniet laudantium nihil sit quaerat earum dolore vitae hic quae dolorum necessitatibus aliquid harum beatae quos iure distinctio officia repellendus."
        ]
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
