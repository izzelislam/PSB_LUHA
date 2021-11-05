<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'no_telepon',
        'role',
        'gambar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'users_id', 'id');
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class, 'users_id', 'id');
    }

    public function ayah()
    {
        return $this->hasOne(Ayah::class, 'users_id', 'id');
    }

    public function ibu()
    {
        return $this->hasOne(Ibu::class, 'users_id', 'id');
    }

    public function wali()
    {
        return $this->hasOne(Wali::class, 'users_id', 'id');
    }

    public function saudara()
    {
        return $this->hasMany(Saudara::class, 'users_id', 'id');
    }

    public function document()
    {
        return $this->hasOne(Document::class, 'users_id', 'id');
    }
}
