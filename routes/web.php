<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\siswaController;


// Routes for guest users (unauthenticated users)
Route::middleware(['guest'])->group(function (): void {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
});

// Routes for authenticated users
Route::middleware(['auth'])->group(function (): void {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/siswa', siswaController::class);
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});
