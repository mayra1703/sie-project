<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltaCurso extends Model
{
    use HasFactory;

    public function calificaciones()
    {
        return $this->hasMany(AltaCalificaciones::class);
    }
}
