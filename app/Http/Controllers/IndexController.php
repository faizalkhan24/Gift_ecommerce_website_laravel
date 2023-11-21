<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Your controller logic goes here
        return view('index'); // Assuming you have a Blade view named 'index'
    }
}
