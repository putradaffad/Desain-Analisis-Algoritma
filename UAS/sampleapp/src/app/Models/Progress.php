<?php

// app/Models/Progress.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id', 'status', 'score'];

    public function user()
    {
        return $this->belongsTo(User::class); // Relasi ke User
    }

    public function course()
    {
        return $this->belongsTo(Course::class); // Relasi ke Course
    }
}

