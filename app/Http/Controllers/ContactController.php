<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index() {
        // Implement your controller logic here
        return view('contact');
    }
}
