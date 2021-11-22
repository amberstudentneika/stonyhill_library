<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        return view('liveLogin');
    }
    public function home(){
        return view('home');
    }
}
