<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LaporanController;

// Form Pelaporan Warga (Bisa diakses tanpa login)
Route::get('/', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');

// Guest Routes (Hanya untuk yang Belum Login)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

// Protected Routes (Wajib Login Petugas BPBD)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/profile', [PetugasController::class, 'profile'])->name('profile');
});