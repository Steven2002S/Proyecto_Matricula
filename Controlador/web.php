<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/', [LoginController::class, 'Mostrarlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::post('/registro', [LoginController::class, 'register'])->name('login.register');
Route::get('/register', [LoginController::class, 'Mostrarregister'])->name('registrar');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/materia', [MateriaController::class, 'index'])->name('materia.index');
Route::get('/materia/create', [MateriaController::class, 'create'])->name('materia.create');
// //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/materia/store', [MateriaController::class, 'store'])->name('materia.store');
Route::post('/materia/edit/{id}', [MateriaController::class, 'edit'])->name('materia.edit');
Route::post('/materia/update/{id}', [MateriaController::class, 'update'])->name('materia.update');
Route::delete('/materia/destroy/{id}', [MateriaController::class, 'destroy'])->name('materia.destroy');



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/estudiante', [EstudianteController::class, 'index'])->name('estudiante.index');
Route::get('/estudiante/create', [EstudianteController::class, 'create'])->name('estudiante.create');
// //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/estudiante/store', [EstudianteController::class, 'store'])->name('estudiante.store');
Route::post('/estudiante/edit/{id}', [EstudianteController::class, 'edit'])->name('estudiante.edit');
Route::post('/estudiante/update/{id}', [EstudianteController::class, 'update'])->name('estudiante.update');
Route::delete('/estudiante/destroy/{id}', [EstudianteController::class, 'destroy'])->name('estudiante.destroy');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/matricula', [MatriculaController::class, 'index'])->name('matricula.index');
Route::get('/matricula/create', [MatriculaController::class, 'create'])->name('matricula.create');
// //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/matricula/store', [MatriculaController::class, 'store'])->name('matricula.store');
Route::post('/matricula/edit/{id}', [MatriculaController::class, 'edit'])->name('matricula.edit');
Route::post('/matricula/update/{id}', [MatriculaController::class, 'update'])->name('matricula.update');
Route::delete('/matricula/destroy/{id}', [MatriculaController::class, 'destroy'])->name('matricula.destroy');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/docente', [DocenteController::class, 'index'])->name('docente.index');
Route::get('/docente/create', [DocenteController::class, 'create'])->name('docente.create');
// //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/docente/store', [DocenteController::class, 'store'])->name('docente.store');
Route::post('/docente/edit/{id}', [DocenteController::class, 'edit'])->name('docente.edit');
Route::post('/docente/update/{id}', [DocenteController::class, 'update'])->name('docente.update');
Route::delete('/docente/destroy/{id}', [DocenteController::class, 'destroy'])->name('docente.destroy');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/estado', [EstadoController::class, 'index'])->name('estado.index');
Route::get('/estado/create', [EstadoController::class, 'create'])->name('estado.create');
// //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/estado/store', [EstadoController::class, 'store'])->name('estado.store');
Route::post('/estado/edit/{id}', [EstadoController::class, 'edit'])->name('estado.edit');
Route::post('/estado/update/{id}', [EstadoController::class, 'update'])->name('estado.update');
Route::delete('/estado/destroy/{id}', [EstadoController::class, 'destroy'])->name('estado.destroy');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/horario', [HorarioController::class, 'index'])->name('horario.index');
Route::get('/horario/create', [HorarioController::class, 'create'])->name('horario.create');
// //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/horario/store', [HorarioController::class, 'store'])->name('horario.store');
Route::post('/horario/edit/{id}', [HorarioController::class, 'edit'])->name('horario.edit');
Route::post('/horario/update/{id}', [HorarioController::class, 'update'])->name('horario.update');
Route::delete('/horario/destroy/{id}', [HorarioController::class, 'destroy'])->name('horario.destroy');