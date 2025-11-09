<?php

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

Route::get('/blog', function () {
 return view('blog', ['title' => 'My Blog Gw']);
});

Route::get('/about', function () {
 return view('about', ['title' => 'My About Gw']);
});
