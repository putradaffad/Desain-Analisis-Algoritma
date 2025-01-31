<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category', 'duration'];

    public function progress()
    {
        return $this->hasMany(Progress::class); // Relasi ke Progress
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class); // Relasi ke Certificate
    }
}
