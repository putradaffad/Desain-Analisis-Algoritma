<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Putra Daffa',
            'email' => 'putra@example.com',
            'password' => Hash::make('password'), // Enkripsi password dengan Hash
            'goals' => 'Learn web development and Python programming.',
        ]);
    }
}
