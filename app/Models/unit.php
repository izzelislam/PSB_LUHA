<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;

    protected $table= "unit";

    protected $fillable= ['kode', 'nama', 'kepala_sekolah'];

    public function biodata()
    {
        return $this->hasMany(Biodata::class, 'unit_id', 'id');
    }
}
