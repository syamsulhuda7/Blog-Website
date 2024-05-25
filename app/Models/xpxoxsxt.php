<?php

namespace App\Models;

class po
{
    private static $blog_posts = [
        [
            "title" => "Artikel Pertama",
            "slug" => "artikel-pertama",
            "author" => "Syamsul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, numquam. Dolor, velit eveniet. Tempora iste dicta reiciendis totam odio ipsam facere consectetur quisquam vero, qui sed amet quasi officiis a perferendis doloribus. Commodi cupiditate esse animi itaque aliquam eius vel aspernatur, quos ab voluptatibus cumque ad, consequatur sint consectetur molestias. Laboriosam quas fuga facere fugiat eum non vitae laborum sapiente expedita tempora! Suscipit quod eligendi repellendus maxime doloribus? Incidunt reiciendis illum consequatur iste facilis vel laborum iusto ipsam blanditiis deserunt.",
        ],
        [
            "title" => "Artikel Kedua",
            "slug" => "artikel-kedua",
            "author" => "Huda",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus omnis dolores eos cupiditate. Ut illum dolorem quam sapiente ab, ex cumque fugit sequi impedit quasi modi libero porro, qui fugiat. Id similique officiis, perferendis magnam hic incidunt dolorum fugiat alias eveniet deserunt vitae iste, voluptatem eius omnis quae, aspernatur distinctio libero nesciunt numquam quas nobis labore aut nostrum! Perspiciatis eum necessitatibus tenetur, ipsam, autem atque ad sed commodi reiciendis similique labore doloribus quidem quia? Nisi, ullam, laboriosam illo officiis rem pariatur labore qui deserunt sapiente asperiores vero? Provident, sunt. Laborum iste voluptates dicta doloremque, molestiae sint tempora incidunt provident tempore?",
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
