<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {

    // Guest Admin Routes (Login)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    });

    // Authenticated Admin Routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});