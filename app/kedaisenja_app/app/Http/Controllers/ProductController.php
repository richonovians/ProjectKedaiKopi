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
}