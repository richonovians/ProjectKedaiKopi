<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $foto_produk = base64_decode($request->input('foto_produk'));

        $cart = new Cart();
        $cart->id_produk = $request->id_produk;
        $cart->nama_produk = $request->nama_produk;
        $cart->harga_produk = $request->harga_produk;
        $cart->quantity = $request->quantity;
        $cart->foto_produk = $foto_produk; // Simpan binary data

        $cart->save();

        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function showCarts() 
    {
        $carts = Cart::all(); // Mendapatkan semua produk dari database
        $totalPrice = 0;

        foreach ($carts as $item) {
            $totalPrice += $item->harga_produk * $item->quantity;
        }

        return view('tema6.keranjang', ['carts' => $carts, 'totalPrice' => $totalPrice]);
    }

    public function hapusProduk($id)
    {
        $item = Cart::find($id);
        if ($item) {
            $item->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false], 404);
        }
    }

    public function updateQuantity($id, $change)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->quantity += $change;
            $cart->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}