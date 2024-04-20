<?php

use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\testingcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', [pagecontroller::class, 'user']);
Route::get('/user/{id}', [pagecontroller::class, 'user2']);


Route::get('/test', testingcontroller::class);