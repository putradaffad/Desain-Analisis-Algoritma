<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pelanggan; // Import PelangganSeeder

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Menambahkan User Admin
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // Pastikan menambahkan password
        ]);

        // Menambahkan Role 'super_admin' ke User Admin
        // Pastikan package Spatie Laravel Permission sudah terinstall dan setup
        $user->assignRole('super_admin');

        // Menjalankan PelangganSeeder
        $this->call([
            PelangganSeeder::class,  // Pemanggilan PelangganSeeder
        ]);
    }
}
