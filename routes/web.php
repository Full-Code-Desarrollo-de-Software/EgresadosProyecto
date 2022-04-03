<?php

use App\Http\Controllers\Admin\EncuestaController;
use App\Models\Pregunta;
use App\Models\Respuesta;
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

/* DB::listen(function ($query) {
    echo "<pre>{$query->sql}</pre>";
});
 */
Route::resource('/encuestas', EncuestaController::class, ['except' => ['edit', 'update', 'destroy']])
    ->parameters(['encuesta' => 'encuesta'])
    ->names('encuestas');

Route::get('/mis-encuestas','App\Http\Controllers\Admin\EncuestaController@mine')->name('encuestas.mine');
Route::get('/mis-encuestas/{year}','App\Http\Controllers\Admin\EncuestaController@showMine')->name('encuestas.show.mine');
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

Route::get('/pruebafinal', 'App\Http\Controllers\Admin\EncuestaController@create');
Route::post('/prueba', 'App\Http\Controllers\Admin\EncuestaController@store')->name('guardar');
Route::get('/grafico', 'App\Http\Controllers\Admin\EncuestaController@show');


