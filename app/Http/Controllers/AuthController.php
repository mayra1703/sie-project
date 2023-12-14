<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//use App\Models\User;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // funcion para mostrar para el registro
    public function index(){
        if(Auth::check()){
            //si esta logado
            return view('calificaciones');
        }
        //si no esta logado
        return view('login');
    }
    public function login(Request $request){
        //comprobar que se han introducido
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        //almacenar las credenciales
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)){
            return redirect()->intended('calificaciones')->withSuccess('Logado Correctamente');
        }
        return redirect('/')->withSuccess('Los datos no son correctos');
    }
    public function logados(){
        if(Auth::check()){
            return view('calificaciones');
        }
        return redirect('/')->withSuccess('No tienes acceso');
    }

}
