<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    function index(){
        return view('shop.dashboard.index');
    }
}
