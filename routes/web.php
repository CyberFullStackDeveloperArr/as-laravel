<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 return view('welcome');
});
Route::get('/home', function () {
 return view('home', ['title' => 'My Home Gw']);
});
Route::get('/contact', function () {
 return view('contact', ['title' => 'My Contact Gw']);
});

Route::get('/posts', function () {
 return view('posts', ['title' => 'My Blog Gw',
    'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-1',
            'titlew' => 'Buku Kisah Si Kancil',
            'author' => 'Rizki',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa
            Lorem ipsum, dolor sit amet consectetur adipisicing'
        ],
        [
            'id' => 2,
            'slug' => 'judul-2',
            'titlew' => 'Artikel Tentang Python',
            'author' => 'Budi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa
            Lorem ipsum, dolor sit amet consectetur adipisicing'
        ]
    ]]);
});
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-1',
            'titlew' => 'Buku Kisah Si Kancil',
            'author' => 'Rizki',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa
            Lorem ipsum, dolor sit amet consectetur adipisicing'
        ],
        [
            'id' => 2,
            'slug' => 'judul-2',
            'titlew' => 'Artikel Tentang Python',
            'author' => 'Budi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Odio, et. Accusamus non possimus saepe culpa
            Lorem ipsum, dolor sit amet consectetur adipisicing'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
     return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post Jamal', 'post' => $post]);
});

Route::get('/about', function () {
 return view('about', ['title' => 'My About Gw']);
});
