<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/Personas', [PersonaController::class, 'ListarPersonas']);
Route::get('/Personas/{id}', [PersonaController::class, 'BuscarId']);
Route::post('/Personas', [PersonaController::class, 'Agregar']);
Route::put('/Personas/{id}', [PersonaController::class, 'Editar']);
Route::patch('/Personas/{id}', [PersonaController::class, 'EditarParcial']);
Route::delete('/Personas/{id}',[PersonaController::class, 'Eliminar']);