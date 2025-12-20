<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
 return view('welcome');
});
Route::get('/home', function () {
 return view('home', ['title' => 'My Home Gw']);
});
Route::get('/contact', function () {
 return view('contact', ['title' => 'My Contact Gw']);
});

// N + 1
Route::get('/posts', function () {
 $posts = Post::latest()->get();
 return view('posts', ['title' => 'My Blog Gw', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
 return view('post', ['title' => 'Single Post Jamal', 'post' => $post]);
});

// N + 1
Route::get('/authors/{user:username}', function (User $user) {
 return view('posts', ['title' => count(    $user->posts) .  ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

// N + 1
Route::get('/categories/{category:slug}', function (Category $category) {
 return view('posts', ['title' =>  'Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/about', function () {
 return view('about', ['title' => 'My About Gw']);
});
