<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home/index');
});
Route::get('/detail', function () {
    return view('detail.index');
})->name('detail');

Route::get('/product/{product:slug}', [ProductController::class, 'show'])
    ->name('product.show');

// routes/web.php
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');




