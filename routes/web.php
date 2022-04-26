<?php

use App\Http\Controllers\admin\CategoriaController;
use App\Http\Controllers\Admin\EncuestaController;
use App\Http\Controllers\Admin\PreguntaController;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
});


Route::middleware(['auth:sanctum', 'verified'])->get('/inicio', function () {
    return view('dashboard');
})->name('inicio');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.home');
})->name('admin-home');


/* DB::listen(function ($query) {
    echo "<pre>{$query->sql}</pre>";
});
 */

Route::resource('/encuestas', EncuestaController::class, ['except' => ['edit', 'update', 'destroy']])
    ->parameters(['encuesta' => 'encuesta'])
    ->names('encuestas');

//Categorias
Route::resource('/admin/categorias', CategoriaController::class,  ['except' => ['show', 'destroy']])
    ->parameters(['categoria' => 'categoria'])
    ->names('admin.categorias');
Route::get('/admin/categorias/eliminar/{id}', 'App\Http\Controllers\Admin\CategoriaController@destroyCategoria')->name('admin.categorias.eliminar');

//Preguntas
Route::get('/admin/categorias/preguntas/{id}', 'App\Http\Controllers\Admin\PreguntaController@index')->name('admin.preguntas.index'); 
Route::resource('/admin/categorias/preguntas', PreguntaController::class,  ['except' => ['show', 'destroy', 'index']])
    ->parameters(['pregunta' => 'pregunta'])
    ->names('admin.preguntas');

Route::get('/admin/preguntas/eliminar/{id}', 'App\Http\Controllers\Admin\PreguntaController@destroyPregunta')->name('admin.preguntas.eliminar');

//
Route::get('/mis-encuestas', 'App\Http\Controllers\Admin\EncuestaController@mine')
    ->name('encuestas.mine');

Route::get('/mis-encuestas/{year}', 'App\Http\Controllers\Admin\EncuestaController@showMine')
    ->name('encuestas.show.mine');

//GRAFICAS
Route::get('/graficas', 'App\Http\Controllers\Admin\GraficaController@index')->name('admin.graficas.index');   

Route::get('/pregunta/{year}/{pregunta}', function ($year, $pregunta) {
    $find = Pregunta::findOrFail($pregunta);
    $preguntaEncontrada = $find->pregunta;
    $respuestas = $find->statsRespuestas($year);
    return view('grafico', compact('respuestas', 'preguntaEncontrada'));
});

Route::get('/pregunta/{pregunta}', function ($pregunta) {
    $find = Pregunta::findOrFail($pregunta);
    $preguntaEncontrada = $find->pregunta;
    $respuestas = $find->statsRespuestas();

    return view('grafico', compact('respuestas', 'preguntaEncontrada'));
});


/* Route::get('/pdf', function () {
    $preguntasSeleccionadas=[1,2,3,4];
    $pdf = PDF::loadView('admin.graficas.reporte', compact('preguntasSeleccinadas'));
    return $pdf->download('invoice.pdf');
}); */
