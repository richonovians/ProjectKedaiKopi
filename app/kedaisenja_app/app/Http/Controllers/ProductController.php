<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mendapatkan semua produk dari database
        return view('tema6.produk', ['p'=>$products]); // Kirim data produk ke view
    }

    public function addcart(Request $request ,$id)
    {
        if(Auth::id())
        {
            // return redirect('tema6.home');
            echo "Gagal tambah produk";
        }

        else 
        {
            $cart=new cart;
            $product=data::find($id);

            $cart->nama_produk=$product->nama_produk;
            $cart->harga_produk=$product->harga_produk;
            $cart->quantity = $request->quantity;
            $cart->save();
            
            return redirect()->back();
        }
    }
}
