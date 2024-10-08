<?php

use App\Models\Post;
use App\Models\User;
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

Route::get('/blog/{post:slug}', function (Post $post) {

    return view('post', [
        'title' => 'Post',
        'post' => $post
    ]);
});

Route::get('/author/{user}', function (User $user) {

    return view('blog', [
        'title' => 'Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
