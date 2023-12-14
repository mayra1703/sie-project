<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IframeController extends Controller
{
    public function calificaciones(){
        return view('iframe.calificaciones');
    }

    public function obtenerContenido(){
        return response()->json(['contenido' => view('iframe.grupos')->render()]);
    }
}
