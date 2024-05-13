<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\Auth\ApiAuthController;

Route::get('/', function () {
    if (auth()->check()) {
       return view('/home');
    }
    else {
        return view('auth/login');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/ver', [App\Http\Controllers\Auth\ApiAuthController::class, 'ver']);
