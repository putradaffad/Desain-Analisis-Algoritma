<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id', 'produk', 'jumlah', 'harga', 'total', 'tanggal_transaksi'
    ];

    // Relasi dengan model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // Mutator untuk harga
    public function setHargaAttribute($value)
    {
        $this->attributes['harga'] = number_format($value, 2, '.', ''); // Memastikan harga dalam format 2 desimal
    }

    // Accessor untuk harga
    public function getHargaAttribute($value)
    {
        return 'Rp ' . number_format($value, 2, ',', '.'); // Format harga dengan 'Rp'
    }
}
