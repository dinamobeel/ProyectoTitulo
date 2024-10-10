<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicoAuthController;

//Aquí se definen las rutas de la aplicación, en este caso solo se tiene una ruta que retorna la vista welcome.

Route::get('/', function () {
    return view('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Otras rutas protegidas...
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para la vista tipoUsuario
Route::get('/tipoUsuario', function () {
    return view('tipoUsuario');
})->name('tipoUsuario');

Route::get('/paciente', function () {
    return view('paciente');
});

// Rutas para el login del médico
Route::get('/medico/login', [MedicoAuthController::class, 'showLoginForm'])->name('medico.login.form');
Route::post('/medico/login', [MedicoAuthController::class, 'login'])->name('medico.login');
Route::post('/medico/logout', [MedicoAuthController::class, 'logout'])->name('medico.logout');

Route::get('/medico', [RecetaController::class, 'showRecetaForm'])->name('medico');

Route::get('/receta/form', [RecetaController::class, 'showRecetaForm'])->name('receta.form');
Route::get('/buscar-paciente', [RecetaController::class, 'buscarPaciente'])->name('buscar.paciente');
Route::post('/receta/store', [RecetaController::class, 'store'])->name('receta.store');

Route::post('/validar-rut', [PacienteController::class, 'validarRut'])->name('validar.rut');
Route::get('/recetas', [PacienteController::class, 'mostrarRecetas'])->name('mostrar.recetas');
