<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function user(){
        return "<h1>controller file</h1>";
    }

    public function user2(string $id){
        return view('users', ['id'=> $id]);
    }
}
