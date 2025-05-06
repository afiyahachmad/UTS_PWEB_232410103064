<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Redirect root to login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Login
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('login.process');

// Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Pengelolaan 
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

// Profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');