<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;

    protected $table = "agama";

    protected $fillable = ["nama"];

    public function ayah()
    {
        return $this->hasMany(Ayah::class, 'agama_id', 'id');
    }

    public function ibu()
    {
        return $this->hasMany(Ibu::class, 'agama_id', 'id');
    }
}
