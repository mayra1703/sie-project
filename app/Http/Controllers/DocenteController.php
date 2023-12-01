<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre_docente' => 'required|string',
            'apeP_docente' => 'required|string',
            'apeM_docente' => 'required|string',
            'fechaN_docente' => 'required|date',
            'direccion_docente' => 'required|string',
            'tel_docente' => 'required|string',
            'corre_docente' => 'required|email',
            // Puedes ajustar las reglas de validación según tus requisitos
        ]);

        $docente = Docente::create($request->all());

        // Puedes realizar acciones adicionales después de guardar el docente

        return redirect()->route('ruta.donde.redirigir'); // Ajusta la ruta de redirección según tu aplicación
    }
}
