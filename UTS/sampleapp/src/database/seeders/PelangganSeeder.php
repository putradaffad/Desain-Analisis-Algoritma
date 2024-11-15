<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        // Menambahkan pelanggan pertama
        Pelanggan::create([
            'nama' => 'Putra Daffa Dwiyansah',
            'alamat' => 'Cikupa, Tangerang',
            'telepon' => '083890728485',
            'email' => 'ptradaffa19@gmail.com',
            'preferensi_produk' => 'Sayur, Buah',
            'tanggal_registrasi' => now(),
            'status' => true,
        ]);

        // Menambahkan pelanggan kedua
        Pelanggan::create([
            'nama' => 'Muhammad Farrel',
            'alamat' => 'Jakarta, Indonesia',
            'telepon' => '081234567890',
            'email' => 'farrel16@gmail.com',
            'preferensi_produk' => 'Daging, Ikan',
            'tanggal_registrasi' => now(),
            'status' => true,
        ]);

        // Menambahkan pelanggan ketiga
        Pelanggan::create([
            'nama' => 'Putri Ramadani',
            'alamat' => 'Bandung, Indonesia',
            'telepon' => '082345678901',
            'email' => 'putriramadani@gmail.com',
            'preferensi_produk' => 'Sayur, Daging',
            'tanggal_registrasi' => now(),
            'status' => false,
        ]);
    }
}
