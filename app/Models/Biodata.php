<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodata';

    protected $fillable = ['users_id', 'unit_id', 'nama_lengkap', 'jenis_kelamin', 'no_wali', 'nama_panggilan', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'anak_ke', 'jumlah_saudara', 'status_anak', 'alamat_lengkap', 'berat_badan', 'tinggi_badan', 'gol_darah', 'riwayat_sakit', 'asal_sekolah', 'alamat_sekolah', 'status', 'pendapatan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(unit::class, 'unit_id', 'id');
    }
}
