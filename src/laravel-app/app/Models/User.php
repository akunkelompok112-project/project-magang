<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nim',      // untuk mahasiswa
        'nip',      // untuk dosen
        'is_active',
        'role_id', // role
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_active' => 'boolean',
    ];


    /**
     * Relasi: user memiliki satu role
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Helper: cek apakah user ini mahasiswa
     */
    public function isMahasiswa()
    {
        return $this->role && strtolower($this->role->name) === 'mahasiswa';
    }

    /**
     * Helper: cek apakah user ini dosen
     */
    public function isDosen()
    {
        return $this->role && strtolower($this->role->name) === 'dosen';
    }
    /**
     * Helper: cek apakah user ini dosen
     */
    public function isAdmin()
    {
        return $this->role && strtolower($this->role->name) === 'admin';
    }
}
