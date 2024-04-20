<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
    // return "<h1>hello world</h1>";
});

Route::get('/post/firstpost', function () {
    return view('firstpost');
});

Route::get('/post/{id}', function ($id) {
    // return view('post');
    return "<h1>post id : ".$id."</h1>";
})->whereIn('id',['movie', 'song', 'painting']);
// whereNumber('id')
// whereAlpha('id')
// whereAlphaNumeric('id')