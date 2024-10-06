<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\API'],function()
{
    // --------------- register and login ----------------//
    Route::controller(AuthenticationController::class)->group(function () {
        Route::post('register', 'register')->name('register');
        Route::post('login', 'login')->name('login');
        Route::post('login/out', 'logOut')->name('login/out');
    });
    // ------------------ get data ----------------------//
    Route::controller(AuthenticationController::class)->group(function () {
        Route::get('get-user', 'userInfo')->middleware('auth:api')->name('get-user');
    });
});