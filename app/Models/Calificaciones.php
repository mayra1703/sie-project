<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    protected $fillable = [
        'calificacion_total',
        'calificacionU1',
        'calificacionU2',
        'calificacionU3',
        'calificacionU4',
        'calificacionU5',
        'calificacionU6'
    ];

    use HasFactory;
}
