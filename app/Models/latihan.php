<?php

namespace App\Models;


class post
{
    private  static $blog_post = [
        [
            'title' => 'judul post pertama',
            'slug' => 'judul-post-pertama',
            'autor' => 'saeful mu`minin',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid libero nobis. Odio ducimus pariatur et architecto molestias soluta commodi sint? Totam mollitia dicta quibusdam laudantium accusantium? Odio, .'

        ],
        [
            'title' => 'judul post kedua',
            'slug' => 'judul-post-kedua',
            'autor' => 'muhammada hasyim',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid libero nobis. Odio ducimus pariatur et architecto molestias soluta commodi sint? Totam mollitia dicta quibusdam laudantium accusantium? Odio, .'

        ],
        [
            'title' => 'judul post ketiga',
            'slug' => 'judul-post-ketiga',
            'autor' => 'muhammada fasigi',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid libero nobis. Odio ducimus pariatur et architecto molestias soluta commodi sint? Totam mollitia dicta quibusdam laudantium accusantium? Odio, .'

        ],
        [
            'title' => 'judul post keempat',
            'slug' => 'judul-post-keempat',
            'autor' => 'muhammada romli',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid libero nobis. Odio ducimus pariatur et architecto molestias soluta commodi sint? Totam mollitia dicta quibusdam laudantium accusantium? Odio, .'

        ]
    ];
    public static function all()
    {
        return  collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts = static::all();
        $post = [];
        foreach ($posts as $p) {
            if ($p['slug'] === $slug) {
                $post = $p;
            }
        }
        return $posts->firstWhere('slug', $slug);
    }
}
