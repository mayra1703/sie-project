<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // funcion para mostrar para el registro
    public function register(Request $request){
        //validacion de datos

        $user = new User();
        $user ->name = $request->name;
        $user ->numero_control = $request->numero_control;
        $user ->contrasena = Hash::make($request->contrasena);

        $user->save();
        Auth::login($user);
        return redirect(route('datos'));
    }
    
    public function login(Request $request){
        //return view('login');
        $credentials = [
            "no_control" =>$request -> no_control,
            "contrasena" =>$request->contrasena,
        ];
        $remember = ($request->has('remember')? true : false);

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
        }else{
            return redirect()->intended(route('datos'));
        }
    }
    public function logout(){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
