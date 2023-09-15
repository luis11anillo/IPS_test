<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        /* 'cliente_id', */
        'nombre_msc',
        'especie',
        'raza',
        'color_pelo',
        'certificado'
    ];
}
