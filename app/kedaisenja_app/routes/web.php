<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('tema6.home');
});

Route::get('/about', function () {
    return view('tema6.about');
});

// Route::get('/produk', function () {
//     return view('tema6.produk');
// });

Route::get('/keranjang', function () {
    return view('tema6.keranjang');
});


Route::resource('/produk', \App\Http\Controllers\ProductController::class);
// Route::resource('/profil.tambah', \App\Http\Controllers\ProfilController::class);

Route::post('/keranjang/{id}', 'CartController@store');