<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produk'; // Nama tabel produk dalam database

    protected $fillable = ['nama_produk', 'harga_produk', 'foto_produk']; // Kolom-kolom yang dapat diisi

    // Definisikan relasi atau metode lain jika diperlukan
}
