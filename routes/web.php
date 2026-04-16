<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;

// USER
Route::get('/', [HomeController::class, 'index']);

// ADMIN
Route::get('/admin', [ProductController::class, 'index']);
Route::post('/admin/store', [ProductController::class, 'store'])->name('product.store');
