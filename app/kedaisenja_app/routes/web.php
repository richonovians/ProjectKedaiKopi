<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('tema6.home');
});

Route::get('/about', function () {
    return view('tema6.about');
});

// Route::get('/produk/simpan', '\App\Http\Controllers\CartController@simpan');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

Route::get('/keranjang', function () {
    return view('tema6.keranjang');
});


Route::resource('/produk', \App\Http\Controllers\ProductController::class);

Route::resource('/menu', \App\Http\Controllers\MenuController::class);

Route::get('/keranjang', [CartController::class, 'showCarts'])->name('carts.show');

Route::delete('/hapus-produk/{id}', [CartController::class, 'hapusProduk']);

Route::post('/update-quantity/{id}/{change}', [CartController::class, 'updateQuantity']);

Route::resource('/cart', \App\Http\Controllers\CartController::class);