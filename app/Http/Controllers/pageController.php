<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function login(){
        return view('Login');
    }
    
    public function Register(){
        return view('Register');
    }
}
