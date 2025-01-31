<?php

namespace Database\Seeders;

use App\Models\Progress;
use Illuminate\Database\Seeder;

class ProgressSeeder extends Seeder
{
    public function run()
    {
        Progress::create([
            'user_id' => 1,  // Mengacu ke User dengan ID 1
            'course_id' => 1, // Mengacu ke Course dengan ID 1 (Introduction to Python)
            'status' => 'ongoing', // Status progres
            'score' => 75, // Nilai tugas
        ]);

        Progress::create([
            'user_id' => 1,  // Mengacu ke User dengan ID 1
            'course_id' => 2, // Mengacu ke Course dengan ID 2 (Web Development with Laravel)
            'status' => 'completed', // Status progres
            'score' => 85, // Nilai tugas
        ]);
    }
}
