<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    public function run()
    {
        Certificate::create([
            'user_id' => 1,  // Mengacu ke User dengan ID 1
            'course_id' => 1, // Mengacu ke Course dengan ID 1 (Introduction to Python)
            'date_issued' => now(), // Tanggal sertifikat diterbitkan
        ]);

        Certificate::create([
            'user_id' => 1,  // Mengacu ke User dengan ID 1
            'course_id' => 2, // Mengacu ke Course dengan ID 2 (Web Development with Laravel)
            'date_issued' => now(), // Tanggal sertifikat diterbitkan
        ]);
    }
}