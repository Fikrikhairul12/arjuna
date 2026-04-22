<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// USER
Route::get('/', [HomeController::class, 'index']);

// STATIC PAGE
Route::view('/tentang', 'pages.tentang');
Route::view('/kontak', 'pages.kontak');

// ADMIN
Route::get('/admin', [ProductController::class, 'index']);
Route::post('/admin/store', [ProductController::class, 'store'])->name('product.store');

// AUTH
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
