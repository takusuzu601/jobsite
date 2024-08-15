<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\DashBoardController as ShopDashBoardController;
use App\Http\Controllers\Shop\ShopAuthController;

//shop login
Route::get('/shop/login',[ShopAuthController::class,'login'])->name('shop.login');
Route::get('/shop/register',[ShopAuthController::class,'register'])->name('shop.register');
Route::get('/shop/forget-password',[ShopAuthController::class,'PasswordRequest'])->name('shop.password.request');

Route::group([
    'middleware' => ['auth', 'user.type:shop'],
    'prefix' => 'shop',
    'as' => 'shop.'
], function () {
    Route::get('/dashboard',[ShopDashBoardController::class,'index'])->name('dashboard.index');
});
