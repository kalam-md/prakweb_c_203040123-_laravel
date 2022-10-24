<?php

namespace App\Models;

class _Post
{
    private static $blog_posts = [
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
