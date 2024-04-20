<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingcontroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('testing');
    }
}
