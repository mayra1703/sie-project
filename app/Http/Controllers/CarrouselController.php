<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrouselController extends Controller
{
    public function showCarousel()
    {
        $imagenPath = asset('imagenes/cesa.jpeg');
    
        return view('welcome', compact('imagenPath'));
    }
}
