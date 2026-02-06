<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'show_login_form'])->name('login');
    Route::get('/register', [AuthController::class, 'show_register_form'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});
