<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Diaz Khalid']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
