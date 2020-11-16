<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TransactionController;

// front page
Route::get('/', [AppController::class, 'index']);
Route::get('/products', [AppController::class, 'products']);

// admin group
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [Admin::class, 'index']);

    // products
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::get('/products/detail/{id}', [ProductController::class, 'show']);
    Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
    Route::PUT('/products/update/{id}', [ProductController::class, 'update']);
    Route::post('/products/delete/{id}', [ProductController::class, 'destroy']);

    //  users
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/edit/{id}', [UserController::class, 'edit']);
    Route::PUT('/users/update/{id}', [UserController::class, 'update']);
    Route::post('/users/delete/{id}', [UserController::class, 'destroy']);

    //  transaction
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::post('/transactions/store', [TransactionController::class, 'store']);
    Route::post('/transactions/delete/{id}', [TransactionController::class, 'destroy']);
    Route::get('/transactions/hapus-belanja/{id}', [TransactionController::class, 'hapusBelanja']);

    //  cart
    Route::get('/cart', [TransactionController::class, 'cart']);
});
