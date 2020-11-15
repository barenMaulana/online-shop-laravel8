<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\Admin\ProductController;

// front page
Route::get('/', [AppController::class, 'index']);
Route::get('/products', [AppController::class, 'products']);

// admin page
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [Admin::class, 'index']);

    //product
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::get('/products/detail/{id}', [ProductController::class, 'show']);
});
