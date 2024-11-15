<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'telepon', 'email', 'preferensi_produk', 'tanggal_registrasi', 'status'
    ];

    // Relasi dengan RiwayatPembelian
    public function riwayatPembelian()
    {
        return $this->hasMany(RiwayatPembelian::class);
    }

    // Mutator untuk nomor telepon
    public function setTeleponAttribute($value)
    {
        $this->attributes['telepon'] = preg_replace('/\D/', '', $value); // Menghapus karakter non-digit
    }

    // Accessor untuk nomor telepon
    public function getTeleponAttribute($value)
    {
        return '0' . substr($value, 1);  // Format nomor telepon
    }

    // Scope untuk pelanggan aktif
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
