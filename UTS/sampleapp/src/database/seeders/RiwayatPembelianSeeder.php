<?php

namespace Database\Seeders;

use App\Models\RiwayatPembelian;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class RiwayatPembelianSeeder extends Seeder
{
    public function run()
    {
        $pelanggan = Pelanggan::first(); // Mengambil pelanggan pertama sebagai contoh

        RiwayatPembelian::create([
            'pelanggan_id' => $pelanggan->id,
            'produk' => 'Apel Organik',
            'jumlah' => 10,
            'harga' => 5000,
            'total' => 50000,
            'tanggal_transaksi' => '2024-11-15',
        ]);
    }
}

