<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

//Aquí se definen las rutas de la aplicación, en este caso solo se tiene una ruta que retorna la vista welcome.

Route::get('/', function () {
    return view('login');
});

Route::get('/tipouser', function () {
    return view('tipoUsuario');
});

Route::get('/medico', function () {
    return view('medico');
});


Route::post('/receta/store', [RecetaController::class, 'store'])->name('receta.store');