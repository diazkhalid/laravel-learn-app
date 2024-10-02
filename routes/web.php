<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Diaz Khalid']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::find($slug);

    return view('post', [
        'title' => 'Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
