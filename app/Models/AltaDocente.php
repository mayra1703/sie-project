<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltaDocente extends Model
{
    protected $fillable = [
        'nombre_docente',
        'apeP_docente',
        'apeM_docente',
        'fechaN_docente',
        'direccion_docente',
        'tel_docente',
        'corre_docente',
    ];

    use HasFactory;
}
