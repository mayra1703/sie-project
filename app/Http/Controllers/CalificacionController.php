<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificaciones;

class CalificacionController extends Controller
{
    public function index()
    {
        $calificaciones = Calificaciones::all();
        return view('calificaciones.index', compact('calificaciones'));
    }

    public function create()
    {
        // Aquí puedes obtener la lista de estudiantes y cursos si lo necesitas
        // $estudiantes = Estudiante::all();
        // $cursos = Curso::all();

        return view('calificaciones.create');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'id_estudiante' => 'required|exists:estudiantes,id',
            'id_curso' => 'required|exists:cursos,id',
            'calificacion' => 'required|numeric',
        ]);

        // Crea una nueva instancia del modelo Calificacion
        Calificacion::create($request->all());

        // Redirige a la vista de calificaciones
        return redirect()->route('calificaciones.index')->with('success', 'Calificación creada correctamente');
    }
}