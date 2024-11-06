<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubblicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function registerForm() {
        return view('auth.register');
    }
}
