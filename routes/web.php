<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IframeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/personales', function () {
    return view('personales');
})->name('personales');

Route::get('/datos', function () {
    return view('datos');
})->name('datos');

Route::get('/horario', function () {
    return view('horario');
})->name('horario');

Route::get('/calificaciones', function () {
    return view('calificaciones');
})->name('calificaciones');

Route::get('/kardex', function () {
    return view('kardex');
})->name('kardex');

Route::get('/grupos', function () {
    return view('grupos');
})->name('grupos');

Route::get('/pagos', function () {
    return view('pagos');
})->name('pagos');

Route::get('/evaluacion', function () {
    return view('evaluacion');
})->name('evaluacion');

Route::get('/iframe', [IframeController::class, 'personales'])->name('iframe.personales');

Route::get('/obtener-calificaciones', [IframeController::class, 'obtenerCalificaciones'])->name('iframe.calificaciones');

Route::get('/obtener-grupos', [IframeController::class, 'obtenerGrupos'])->name('iframe.grupos');

Route::get('/obtener-horario', [IframeController::class, 'obtenerHorario'])->name('iframe.horario');

Route::get('/obtener-kardex', [IframeController::class, 'obtenerKardex'])->name('iframe.kardex');

Route::get('/obtener-pagos', [IframeController::class, 'obtenerPagos'])->name('iframe.pagos');

Route::get('/obtener-evaluacion', [IframeController::class, 'obtenerEvaluacion'])->name('iframe.evaluacion');

Route::view('/login',"login");
Route::view('/registro', "register");
Route::view('/datos',"datos");

Route::post('login', function(){
    $credentials = request()->only('email', 'password');
   
   if(Auth::attempt($credentials)){
        return view('datos');
    }else{
        return view('login');
    }
    
    
});