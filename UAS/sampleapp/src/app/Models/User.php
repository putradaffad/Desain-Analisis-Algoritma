<?php

// app/Models/User.php
namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements FilamentUser, HasAvatar
{
    use HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_url',
        'goals', // Menambahkan kolom goals
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the avatar URL for the user.
     *
     * @return string|null
     */
    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->avatar_url) {
            return asset('storage/'.$this->avatar_url); // Menambahkan avatar_url jika ada
        } else {
            $hash = md5(strtolower(trim($this->email)));

            return 'https://www.gravatar.com/avatar/'.$hash.'?d=mp&r=g&s=250';
        }
    }

    /**
     * Check if the user can access the Filament Panel.
     *
     * @param Panel $panel
     * @return bool
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return true;  // Bisa mengakses panel, sesuaikan sesuai kebutuhan
    }

    /**
     * Relasi ke progress
     */
    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    /**
     * Relasi ke sertifikat
     */
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    /**
     * Menyimpan password dengan aman.
     */
    public static function createWithHashedPassword(array $attributes)
    {
        $attributes['password'] = Hash::make($attributes['password']); // Pastikan password di-hash
        return self::create($attributes);
    }
}
