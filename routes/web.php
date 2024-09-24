<?php

use Illuminate\Support\Facades\Route;

//Aquí se definen las rutas de la aplicación, en este caso solo se tiene una ruta que retorna la vista welcome.

Route::get('/', function () {
    return view('login');
});


Route::get('/Inicio', function () {
    return view('prueba');
});  