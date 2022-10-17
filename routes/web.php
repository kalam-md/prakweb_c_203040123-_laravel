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
        "name" => "Kalam",
        "email" => "kalam@mail.com",
        "image" => "kalam.png",
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kalam Mahardhika",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non officiis quisquam recusandae blanditiis facilis inventore itaque, consectetur dolore. Debitis recusandae blanditiis optio enim! Atque quos soluta mollitia temporibus accusamus voluptatem. Voluptate reprehenderit impedit necessitatibus sequi sint quibusdam, accusantium totam? Veritatis consectetur error possimus quo molestias iusto officia, hic harum adipisci!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Eva Amelia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia hic architecto veniam ex eligendi dolore ipsa alias, laboriosam magnam quos consequatur neque nemo totam perspiciatis labore natus autem adipisci minima! Voluptates exercitationem porro repudiandae? Incidunt commodi, ex vero eaque nam qui temporibus blanditiis tempora excepturi perspiciatis et modi repellat nesciunt! Ullam quae soluta totam officia porro accusantium sit voluptatem quisquam sed consequuntur nesciunt expedita, animi et autem voluptate sequi odio qui blanditiis voluptas deserunt nisi, ea error ducimus molestiae! Hic!",
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kalam Mahardhika",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non officiis quisquam recusandae blanditiis facilis inventore itaque, consectetur dolore. Debitis recusandae blanditiis optio enim! Atque quos soluta mollitia temporibus accusamus voluptatem. Voluptate reprehenderit impedit necessitatibus sequi sint quibusdam, accusantium totam? Veritatis consectetur error possimus quo molestias iusto officia, hic harum adipisci!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Eva Amelia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia hic architecto veniam ex eligendi dolore ipsa alias, laboriosam magnam quos consequatur neque nemo totam perspiciatis labore natus autem adipisci minima! Voluptates exercitationem porro repudiandae? Incidunt commodi, ex vero eaque nam qui temporibus blanditiis tempora excepturi perspiciatis et modi repellat nesciunt! Ullam quae soluta totam officia porro accusantium sit voluptatem quisquam sed consequuntur nesciunt expedita, animi et autem voluptate sequi odio qui blanditiis voluptas deserunt nisi, ea error ducimus molestiae! Hic!",
        ],
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});
