<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'calificacion' => 'required|numeric|min:0|max:10', // Puedes ajustar las reglas de validación según tus requisitos
        ]);

        $calificacion = Calificacion::create([
            'calificacion' => $request->input('calificacion'),
        ]);

        // Puedes realizar acciones adicionales después de guardar la calificación

        return redirect()->route('ruta.donde.redirigir'); // Ajusta la ruta de redirección según tu aplicación
    }
}
