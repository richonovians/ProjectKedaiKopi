<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    protected $table = 'carts';

    protected $fillable = ['id_produk', 'nama_produk', 'harga_produk', 'quantity'];
}
