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
    return view('home', [
        "title" => "Home"
    ]);

});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Maulana Bintang",
        "email" => "maulana@student.polinema.ac.id",
        "image" => "lana.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Maulana Irfansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem.
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bina Fansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem."
        ],
    ];
    return view('posts', [
		"title" => "Blog",
		"posts" => $blog_posts
	]);
});

// halaman single posts
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Maulana Irfansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem.
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bina Fansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, recusandae error quo nesciunt nulla ut aliquid? Dolore quos minima vero ut alias sunt cum non rerum recusandae repudiandae ab deserunt explicabo quas, a vel earum! Fugit voluptate dolore quasi vitae aliquam ipsam quaerat debitis, molestiae, deserunt consequuntur modi. Et a reiciendis repellat quis officiis ratione! Velit corporis reprehenderit nihil accusantium, temporibus nulla laborum soluta, quidem impedit cum debitis possimus laudantium dicta voluptas excepturi maxime eligendi odio quisquam eum, ullam exercitationem."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
