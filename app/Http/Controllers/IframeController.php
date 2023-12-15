<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IframeController extends Controller
{
    public function calificaciones(){
        return view('iframe.calificaciones');
    }

    public function obtenerGrupos(){
        return response()->json(['contenido' => view('iframe.grupos')->render()]);
    }

    public function obtenerHorario(){
        return response()->json(['contenido' => view('iframe.horario')->render()]);
    }

    public function obtenerKardex(){
        return response()->json(['contenido' => view('iframe.kardex')->render()]);
    }

    public function obtenerPagos(){
        return response()->json(['contenido' => view('iframe.pagos')->render()]);
    }

    public function obtenerEvaluacion(){
        return response()->json(['contenido' => view('iframe.evaluacion')->render()]);
    }
}
