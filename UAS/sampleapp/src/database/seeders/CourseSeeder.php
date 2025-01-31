<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'name' => 'Introduction to Python',
            'description' => 'Learn the basics of Python programming.',
            'category' => 'Programming',
            'duration' => 30,  // Durasi dalam jam
        ]);

        Course::create([
            'name' => 'Web Development with Laravel',
            'description' => 'Learn how to build web applications using Laravel framework.',
            'category' => 'Web Development',
            'duration' => 40,
        ]);
    }
}