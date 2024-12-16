<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/LavoraConNoi', [PublicController::class, 'lavoraConNoi'])->name('lavoraConNoi');
Route::get('/change-locale/{locale}', [PublicController::class, 'changeLocale'])->name('locale');
// CRUD
Route::get('/Product/Create', [ProductController::class, 'createPage'])->name('product.create');
Route::get('/Product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/Product/show/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/Category/{category}', [ProductController::class, 'filterbyCategory'])->name('filterByCategory');

//REVISOR
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{product}', [RevisorController::class, 'accept'])->name('accept.product');
Route::patch('/reject/{product}', [RevisorController::class, 'reject'])->name('reject.product');
Route::patch('/cancel/{product}', [RevisorController::class, 'cancel'])->name('cancel.product');
Route::middleware(['web', 'auth'])->group(function () {
    Route::post('/revisor/request', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
});



Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

//SEARCH
Route::get('/search/product', [PublicController::class, 'searchProduct'])->name('products.search');

// Cambio Lingue
Route::post('/cambiolingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLanguage');
