<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificaciones;

class CalificacionController extends Controller
{
    public function index()
    {
        $calificaciones1 = Calificaciones::find(1);
        $calificaciones2 = Calificaciones::find(2);
        $calificaciones3 = Calificaciones::find(3);
        $calificaciones4 = Calificaciones::find(4);
        $calificaciones5 = Calificaciones::find(5);
        $calificaciones6 = Calificaciones::find(6);
        $calificaciones7 = Calificaciones::find(7);

        return view('iframe.calificaciones', compact('calificaciones1', 'calificaciones2', 'calificaciones3', 'calificaciones4', 'calificaciones5', 'calificaciones6', 'calificaciones7'));
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
        return redirect()->route('iframe.calificaciones')->with('success', 'Calificación creada correctamente');
    }
}