<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre_estudiante' => 'required|string',
            'apeP_estudiante' => 'required|string',
            'apeM_estudiante' => 'required|string',
            'fechaN_estudiante' => 'required|date',
            'direccion_estudiante' => 'required|string',
            'tel_estudiante' => 'required|string',
            'correo_estudiante' => 'required|email',
            'carrera' => 'required|string',
            // Puedes ajustar las reglas de validación según tus requisitos
        ]);

        $estudiante = Estudiante::create($request->all());

        // Puedes realizar acciones adicionales después de guardar al estudiante

        return redirect()->route('ruta.donde.redirigir'); // Ajusta la ruta de redirección según tu aplicación
    }
}
