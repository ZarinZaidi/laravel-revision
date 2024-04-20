<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
    // return "<h1>hello world</h1>";
})->name('mypost');

Route::get('/post/firstpost', function () {
    return view('firstpost');
});

// routing for task one first page
Route::get('/taskone', function () {
    return view('taskone');
});

// routing for task one second page
Route::get('/taskone/secondpage', function () {
    return view('secondpage');
})->name('secondpage');

// routing for task one third page
Route::get('/taskone/thirdpage', function () {
    return view('thirdpage');
})->name('thirdpage');

// Route::get('/post/{id}', function ($id) {
//     // return view('post');
//     return "<h1>post id : ".$id."</h1>";
// })->whereIn('id',['movie', 'song', 'painting']);
// // whereNumber('id')
// // whereAlpha('id')
// // whereAlphaNumeric('id')