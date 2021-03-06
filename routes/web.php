<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicamentoController;

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
    return view('auth/login');
});

//Enrutar con categoria
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/categoria/crear', [CategoriaController::class, 'create']);
Route::post('/categoria/guardar',[CategoriaController::class, 'store']);
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'edit']);
Route::put('/categoria/actualizar/{id}',[CategoriaController::class, 'update']);
Route::delete('/categoria/eliminar/{categoria}',[CategoriaController::class, 'destroy']);

//Enrutar con producto
Route::get('/producto', [ProductoController::class, 'index']);
Route::get('/producto/crear', [ProductoController::class, 'create']);
Route::post('/producto/guardar',[ProductoController::class, 'store']);
Route::get('/producto/editar/{id}', [ProductoController::class, 'edit']);
Route::put('/producto/actualizar/{id}',[ProductoController::class, 'update']);
Route::delete('/producto/eliminar/{producto}',[ProductoController::class, 'destroy']);

//Enrutar con Paciente
Route::get('/paciente', [PacienteController::class, 'index']);
Route::get('/paciente/crear', [PacienteController::class, 'create']);
Route::post('/paciente/guardar',[PacienteController::class, 'store']);
Route::get('/paciente/editar/{id}', [PacienteController::class, 'edit']);
Route::put('/paciente/actualizar/{id}',[PacienteController::class, 'update']);
Route::delete('/paciente/eliminar/{paciente}',[PacienteController::class, 'destroy']);

//Enrutar con Medicamentos
Route::get('/medicamento', [MedicamentoController::class, 'index']);
Route::get('/medicamento/crear', [MedicamentoController::class, 'create']);
Route::post('/medicamento/guardar',[MedicamentoController::class, 'store']);
Route::get('/medicamento/editar/{id}', [MedicamentoController::class, 'edit']);
Route::put('/medicamento/actualizar/{id}',[MedicamentoController::class, 'update']);
Route::delete('/medicamento/eliminar/{medicamento}',[MedicamentoController::class, 'destroy']);






/*
Route::get('/categoria', function () {
    return view('categorias.index');
});
*/


Auth::routes();

Route::get('/principal', [App\Http\Controllers\HomeController::class, 'index'])->name('principal');
