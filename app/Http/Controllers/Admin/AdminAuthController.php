<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    function login(){
        return view('admin.auth.login');
    }
    function register(){
        return view('admin.auth.register');
    }

    function PasswordRequest(){
        return view('admin.auth.forget-password');
    }
}
