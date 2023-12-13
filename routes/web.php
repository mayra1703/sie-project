<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');