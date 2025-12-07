<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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
 return view('posts', ['title' => 'My Blog Gw', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
 return view('post', ['title' => 'Single Post Jamal', 'post' => $post]);
});
Route::get('/authors/{user}', function (User $user) {
 return view('posts', ['title' => 'Articles by' . $user->name, 'posts' => $user->posts]);
});

Route::get('/about', function () {
 return view('about', ['title' => 'My About Gw']);
});
