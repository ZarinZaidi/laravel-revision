<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $names = [
        1 => ['name'=>'sam','phone'=>'0000','city'=>'kl'],
        2 => ['name'=>'mike','phone'=>'0001','city'=>'kl'],
        3 => ['name'=>'liz','phone'=>'0002','city'=>'kl'],
        4 => ['name'=>'doe','phone'=>'0003','city'=>'kl'],

    ];
    return view('test', [
        'user'=>$names,
    ]);
});