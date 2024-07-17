<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ConsultorioController;
use App\Http\Controllers\API\PersonaController;
use App\Http\Controllers\API\MedicoController;
use App\Http\Controllers\API\PacienteController;
use App\Http\Controllers\API\UsuarioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/Usuarios', [UsuarioController::class, 'ListarUsuarios']);
Route::get('/login', [UsuarioController::class, 'login']);
Route::post('/register', [UsuarioController::class, 'signup']);


Route::get('/Personas', [PersonaController::class, 'ListarPersonas']);
Route::get('/Personas/{id}', [PersonaController::class, 'BuscarId']);
Route::post('/Personas', [PersonaController::class, 'Agregar']);
Route::put('/Personas/{id}', [PersonaController::class, 'Editar']);
Route::patch('/Personas/{id}', [PersonaController::class, 'EditarParcial']);
Route::delete('/Personas/{id}',[PersonaController::class, 'Eliminar']);

Route::get('/Medicos', [MedicoController::class, 'ListarMedicos']);
Route::get('/Medicos/{IdMedico}', [MedicoController::class, 'BuscarId']);
Route::post('/Medicos', [MedicoController::class, 'Agregar']);
Route::put('/Medicos/{IdMedico}', [MedicoController::class, 'Editar']);
Route::patch('/Medicos/{IdMedico}', [MedicoController::class, 'EditarParcial']);
Route::delete('/Medicos/{IdMedico}',[MedicoController::class, 'Eliminar']);

Route::get('/Pacientes', [PacienteController::class, 'ListarPacientes']);
Route::get('/Pacientes/{id}', [PacienteController::class, 'BuscarId']);
Route::post('/Pacientes', [PacienteController::class, 'Agregar']);
Route::put('/Pacientes/{id}', [PacienteController::class, 'Editar']);
Route::patch('/Pacientes/{id}', [PacienteController::class, 'EditarParcial']);
Route::delete('/Pacientes/{id}',[PacienteController::class, 'Eliminar']);

Route::get('/Consultorio', [ConsultorioController::class, 'ListarConsultorio']);
Route::get('/Consultorio/{id}', [ConsultorioController::class, 'BuscarId']);
Route::post('/Consultorio', [ConsultorioController::class, 'Agregar']);
Route::put('/Consultorio/{id}', [ConsultorioController::class, 'Editar']);
Route::patch('/Consultorio/{id}', [ConsultorioController::class, 'EditarParcial']);
Route::delete('/Consultorio/{id}',[ConsultorioController::class, 'Eliminar']);