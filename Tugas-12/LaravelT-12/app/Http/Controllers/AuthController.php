<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function register()
    {
        return view('register');
    }
}