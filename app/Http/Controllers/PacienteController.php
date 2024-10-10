<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function validarRut(Request $request)
    {
        $rut = $request->input('rut');
        $paciente = Paciente::where('rut', $rut)->first();

        if ($paciente) {
            return redirect()->route('mostrar.recetas', ['rut' => $rut]);
        } else {
            return redirect()->back()->with('error', 'RUT no encontrado. Por favor, ingrese un RUT válido.');
        }
    }

    public function mostrarRecetas(Request $request)
    {
        $rut = $request->input('rut');
        // Aquí puedes obtener las recetas del paciente usando el RUT
        // $recetas = Receta::where('rutPaciente', $rut)->get();

        return view('recetas', ['rut' => $rut /*, 'recetas' => $recetas */]);
    }
}

