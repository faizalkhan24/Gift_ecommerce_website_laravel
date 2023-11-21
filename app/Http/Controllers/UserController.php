<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function showLoginForm(){
    return view('login');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        return redirect()->intended('/');
    }

    return redirect()->route('login')->with('error', 'Invalid credentials');
}

public function logout()
{
    auth()->logout();
    return redirect('/');
}
}

