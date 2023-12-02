<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoServicioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'monto' => 'required|numeric',
            'fecha_pago' => 'required|date',
            // Puedes ajustar las reglas de validación según tus requisitos
        ]);

        $pagoServicio = PagoServicio::create($request->all());

        // Puedes realizar acciones adicionales después de guardar el pago de servicios

        return redirect()->route('ruta.donde.redirigir'); // Ajusta la ruta de redirección según tu aplicación
    }
}
