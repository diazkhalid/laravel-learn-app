<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'white-wheat-bread',
                'title' => 'White Wheat Bread',
                'author' => 'Diaz Khalid',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, quae iste maxime vitae nobis sint nam esse quis voluptatem saepe. Nam voluptatem id quia dolore corporis recusandae distinctio maxime vero?'
            ],
            [
                'id' => 2,
                'slug' => 'brown-wheat-bread',
                'title' => 'Brown Wheat Bread',
                'author' => 'Diaz Khalid',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi delectus optio voluptates sit saepe neque molestiae veniam, incidunt non a doloribus natus labore dicta quae culpa velit quidem itaque illum.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
