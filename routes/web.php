<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/gambar', function () {
    return view('img'); // tanpa .blade.php
});

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index']);

use App\Http\Controllers\ManagementController;

Route::get('/management', [ManagementController::class, 'index']);

use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'index']);


Route::get('/produk', function () {
    return view('productpage');
});

use App\Http\Controllers\UserController;

Route::get('/profile', [UserController::class, 'profile'])->name('profile');



Route::get('/home', function () {
    return view('pages/home');
});

use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'show']);