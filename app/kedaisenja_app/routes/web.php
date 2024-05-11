<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tema6.home');
});

Route::get('/about', function () {
    return view('tema6.about');
});

Route::get('/produk', function () {
    return view('tema6.produk');
});

Route::get('/keranjang', function () {
    return view('tema6.keranjang');
});


Route::resource('/profil', \App\Http\Controllers\ProfilController::class);
Route::resource('/profil.tambah', \App\Http\Controllers\ProfilController::class);