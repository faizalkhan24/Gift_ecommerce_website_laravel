<?php

// app/Http/Controllers/ShopController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        // Implement your controller logic here
        return view('shop');
    }
}

