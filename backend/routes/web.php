<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\API\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd('hola');
    return view('welcome');
});

Route::prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/{user}/detalle','detail')->name('user_detail');        
});

