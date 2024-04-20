<?php

use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', [pagecontroller::class, 'user']);
Route::get('/user', [pagecontroller::class, 'user2']);
