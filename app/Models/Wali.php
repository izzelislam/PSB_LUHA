<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    protected $table = 'wali';

    protected $fillable = ['users_id', 'nama', 'alamat', 'no_telepon', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
