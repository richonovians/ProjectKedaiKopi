<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function store(Request $request)
    {
        Cart::create([
            'id_produk' => $request->id_produk,
            'harga_produk' => $request->harga_produk,
            'quantity' => 1
        ]);

        return redirect('/keranjang');
    }
}