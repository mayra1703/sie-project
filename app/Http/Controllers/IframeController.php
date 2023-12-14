<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IframeController extends Controller
{
    public function cambiarContenido($id){
        // Logica para determinar la URL del iframe segun el $id
        $url = $id === 'enlace1' ? "{{ route('calificaciones') }}" : "{{ route('grupos') }}";

        return view('datos', ['url' => $url]);
    }
}
