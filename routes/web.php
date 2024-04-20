<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test',["user"=>"sam","city"=>"<script>alert('kuala lumpur')</script>"]);
});