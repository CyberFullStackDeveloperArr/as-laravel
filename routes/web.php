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

Route::get('/posts', function () {
 return view('posts', ['title' => 'My Blog Gw', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
 return view('post', ['title' => 'Single Post Jamal', 'post' => $post]);
});
// Route::get('/authors/{user}', function (User $user) {
//  return view('posts', ['title' => 'Articles by' . $user->name, 'posts' => $user->posts]);
// }); Eloquent Relationship
Route::get('/authors/{user:username}', function (User $user) {
 return view('posts', ['title' => count(    $user->posts) .  ' Articles by ' . $user->name, 'posts' => $user->posts]);
}); // Post Category
Route::get('/categories/{category:slug}', function (Category $category) {
 return view('posts', ['title' =>  'Articles in: ' . $category->name, 'posts' => $category->posts]);
}); // Post Category

Route::get('/about', function () {
 return view('about', ['title' => 'My About Gw']);
});
