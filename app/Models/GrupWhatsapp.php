<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupWhatsapp extends Model
{
    use HasFactory;

    protected $table = "grup_whatsapp";

    protected $fillable = ["nama", "link"];
}
