<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saudara extends Model
{
    use HasFactory;

    protected $table = 'saudara';

    protected $fillable = ['users_id', 'nama', 'umur', 'pendidikan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
