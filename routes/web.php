<?php
use App\Estudiante;

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
    // Obtener todos los estudiantes con su grupo (si la relación está definida correctamente)
    $estudiantes = Estudiante::with('grupo')->get();

    // Pasar la variable a la vista
    return view('estudiantes.index', compact('estudiantes'));
});

Route::resource('grupos', 'GrupoController');
Route::resource('estudiantes', 'EstudianteController');
