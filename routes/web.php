<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/', [PublicController::class, 'home']
)->name('home');

// CRUD
Route::get('/Product/Create', [ProductController::class, 'createPage'])->name('product.create');




