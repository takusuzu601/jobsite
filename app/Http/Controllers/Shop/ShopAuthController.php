<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopAuthController extends Controller
{
    function login(){
        return view('shop.auth.login');
    }
    function register(){
        return view('shop.auth.register');
    }
    function PasswordRequest(){
        return view('shop.auth.forget-password');
    }
}
