<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'show_login_form'])->name('login');
});
