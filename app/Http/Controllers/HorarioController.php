<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'horas_curso' => 'required|integer',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_final' => 'required|date_format:H:i|after:hora_inicio',
            // Puedes ajustar las reglas de validación según tus requisitos
        ]);

        $horario = Horario::create($request->all());

        // Puedes realizar acciones adicionales después de guardar el horario

        return redirect()->route('ruta.donde.redirigir'); // Ajusta la ruta de redirección según tu aplicación
    }
}
