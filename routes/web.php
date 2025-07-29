<?php

use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => 'guest',
], function () {

    Route::get('/auth', [App\Http\Controllers\AuthenticatorController::class, 'render'])->name('auth.index');
    Route::post('/auth', [App\Http\Controllers\AuthenticatorController::class, 'auth'])->name('auth.login');
    Route::post('/auth-r', [App\Http\Controllers\AuthenticatorController::class, 'store'])->name('auth.register');

    Route::get('/login', function () {
        return redirect()->route('auth.index');
    })->name('login');
});

Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('/logout', [App\Http\Controllers\AuthenticatorController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'render'])->name('profile');

    Route::get('/carrinho', [App\Http\Controllers\CartController::class, 'render'])->name('cart');
    Route::post('/cart-add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::get('/cart-remove/{id?}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart-clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
});

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'render'])->name('home');
Route::get('/sobre-nos', [App\Http\Controllers\WebsiteController::class, 'about'])->name('about');
Route::get('/detalhes/{id}', [App\Http\Controllers\ProductController::class, 'render'])->name('product.view');

Route::get('/produtos', [App\Http\Controllers\ProductController::class, 'list'])->name('products.list');
Route::get('/colecao/{id}', [App\Http\Controllers\CollectionController::class, 'render'])->name('collection');
Route::get('/categoria/{id}', [App\Http\Controllers\CategoryController::class, 'render'])->name('category');
