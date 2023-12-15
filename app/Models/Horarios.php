<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    protected $fillable = [
        'horas_curso',
        'hora_inicio',
        'hora_final',
    ];
    use HasFactory;
}
