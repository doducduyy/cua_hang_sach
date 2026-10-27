<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'tendangnhap',
        'mk',
        'hoten',
        'sdt',
        'trangthai',
        'vaitro_id',
    ];
    protected $hidden = ['mk'];
    public function getAuthPassword()
    {
        return $this->mk;
    }
    public function vaitro()
    {
        return $this->belongsTo(vaitro::class, 'vaitro_id');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
  

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
