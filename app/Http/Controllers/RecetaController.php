<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecetaController extends Controller
{
    public function showRecetaForm()
    {
        $medico = Session::get('medico'); // Obtener el médico autenticado de la sesión
        if (!$medico) {
            return redirect()->route('medico.login.form')->with('error', 'Debe autenticarse como médico.');
        }
        $nextRecetaId = Receta::max('id_receta') + 1; // Obtener el próximo ID de la receta
        $paciente = null; // Inicialmente, no hay paciente seleccionado

        return view('medico', compact('medico', 'nextRecetaId', 'paciente'));
    }

    public function buscarPaciente(Request $request)
    {
        $rut = $request->query('rut');
        $paciente = Paciente::where('rut_paciente', $rut)->first();
        $medico = Session::get('medico'); // Obtener el médico autenticado de la sesión
        if (!$medico) {
            return redirect()->route('medico.login.form')->with('error', 'Debe autenticarse como médico.');
        }
        $nextRecetaId = Receta::max('id_receta') + 1; // Obtener el próximo ID de la receta

        if ($paciente) {
            return view('medico', compact('paciente', 'medico', 'nextRecetaId'));
        } else {
            return redirect()->back()->with('error', 'Paciente no encontrado. Por favor, ingrese un RUT válido.');
        }
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'idReceta' => 'required|integer',
            'rutPaciente' => 'required|string',
            'nombrePaciente' => 'required|string',
            'edadPaciente' => 'required|integer',
            'sexoPaciente' => 'required|string',
            'fechaNacimientoPaciente' => 'required|date',
            'condicionMedicaPaciente' => 'required|string',
            'fechaCreacion' => 'required|date',
            'diagnostico' => 'required|string',
            'comentario' => 'required|string',
            'nombreMedico' => 'required|string',
            'rutMedico' => 'required|string',
            'especialidadMedico' => 'required|string',
        ]);

        // Crear una nueva receta
        Receta::create([
            'rutPaciente' => $request->rutPaciente,
            'nombrePaciente' => $request->nombrePaciente,
            'edadPaciente' => $request->edadPaciente,
            'sexoPaciente' => $request->sexoPaciente,
            'fechaNacimientoPaciente' => $request->fechaNacimientoPaciente,
            'condicionMedicaPaciente' => $request->condicionMedicaPaciente,
            'fechaCreacion' => $request->fechaCreacion,
            'diagnostico' => $request->diagnostico,
            'comentario' => $request->comentario,
            'nombreMedico' => $request->nombreMedico,
            'rutMedico' => $request->rutMedico,
            'especialidadMedico' => $request->especialidadMedico,
        ]);

        return redirect()->route('receta.form')->with('success', 'Receta generada exitosamente.');
    }
}