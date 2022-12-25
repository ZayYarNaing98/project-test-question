<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/add', [ProductController::class, 'add']);
Route::post('/products/add', [ProductController::class, 'create']);

Route::get('/products/detail/{id}', [ProductController::class, 'detail']);

Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/update/{id}', [ProductController::class, 'update']);

Route::get('/products/delete/{id}', [ProductController::class, 'delete']);

Route::get('/', [ProductController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
