<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;

    protected $table = 'ibu';

    protected $fillable = ['agama_id', 'users_id', 'nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan', 'pekerjaan', 'alamat_rumah', 'no_telepon', 'alamat_kantor', 'no_telepon_kantor', 'status', 'pendapatan'];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'agama_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
