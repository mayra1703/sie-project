<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltaEstudiante extends Model
{
    protected $fillable = [
        'nombre_estudiante',
        'apeP_estudiante',
        'apeM_estudiante',
        'fechaN_estudiante',
        'direccion_estudiante',
        'tel_estudiante',
        'correo_estudiante',
        'carrera',
    ];
    use HasFactory;

    public function calificaciones(){
        return $this->hasMany(AltaCalificaciones::class);
    }
}
