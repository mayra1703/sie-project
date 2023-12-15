<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltaCalificaciones extends Model
{
    protected $fillable = ['calificacion'];
    use HasFactory;

    public function alumno()
    {
        return $this->belongsTo(AltaEstudiante::class);
    }

    public function materia()
    {
        return $this->belongsTo(AltaCurso::class);
    }
}
