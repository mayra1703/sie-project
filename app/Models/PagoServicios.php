<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoServicios extends Model
{
    protected $fillable = [
        'monto',
        'fecha_pago',
    ];

    // Puedes agregar relaciones u otras lógicas según tus necesidades

    public function getMontoAttribute($value)
    {
        // Formatear el monto según la configuración
        return number_format($value, 2, ',', '.');
    }

    public function setMontoAttribute($value)
    {
        // Convertir el monto al formato adecuado antes de guardarlo
        $this->attributes['monto'] = str_replace(',', '.', $value);
    }
    use HasFactory;
}
