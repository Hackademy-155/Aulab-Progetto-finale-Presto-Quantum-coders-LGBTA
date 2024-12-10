<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'home'])->name('home');

// CRUD
Route::get('/Product/Create', [ProductController::class, 'createPage'])->name('product.create');
Route::get('Product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('Product/show/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('Category/{category}', [ProductController::class, 'filterbyCategory'])->name('filterByCategory');

//REVISOR
Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');