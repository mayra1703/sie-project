<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IframeController;
use App\Http\Controllers\CalificacionController;
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
    return view('iframe.personales');
})->name('personales');

Route::get('/datos', function () {
    return view('iframe.datos');
})->name('datos');

Route::get('/horario', function () {
    return view('iframe.horario');
})->name('horario');

Route::get('/kardex', function () {
    return view('iframe.kardex');
})->name('kardex');

Route::get('/grupos', function () {
    return view('iframe.grupos');
})->name('grupos');

Route::get('/pagos', function () {
    return view('iframe.pagos');
})->name('pagos');

Route::get('/evaluacion', function () {
    return view('iframe.evaluacion');
})->name('evaluacion');

Route::get('/iframe', [IframeController::class, 'personales'])->name('iframe.personales');


Route::get('/calificaciones', [CalificacionController::class, 'datosCalificaciones'])->name('iframe.calificaciones');

Route::get('/obtener-calificaciones', [IframeController::class, 'obtenerCalificaciones'])->name('iframe.calificaciones');

Route::get('/obtener-grupos', [IframeController::class, 'obtenerGrupos'])->name('iframe.grupos');

Route::get('/obtener-horario', [IframeController::class, 'obtenerHorario'])->name('iframe.horario');

Route::get('/obtener-kardex', [IframeController::class, 'obtenerKardex'])->name('iframe.kardex');

Route::get('/obtener-pagos', [IframeController::class, 'obtenerPagos'])->name('iframe.pagos');

Route::get('/obtener-evaluacion', [IframeController::class, 'obtenerEvaluacion'])->name('iframe.evaluacion');

Route::view('/login',"login");
Route::view('/registro', "register");
Route::view('/datos',"datos");

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');