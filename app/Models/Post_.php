<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Maulana Irfansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem.
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem."
        ],
        [
            "title" => "Judul Tulisan Maulana",
            "slug" => "judul-post-kedua",
            "author" => "Bina Fansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
