<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Medico;

class MedicoAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('loginMedico');
    }

    public function login(Request $request)
    {
        $request->validate([
            'medicoId' => 'required|integer|exists:Medico,id_medico',
        ]);

        $medico = Medico::where('id_medico', $request->medicoId)->first();

        if ($medico) {
            Session::put('medico', $medico);
            return redirect()->route('receta.form');
        }

        return redirect()->back()->withErrors(['medicoId' => 'ID de Médico no válido.']);
    }

    public function logout()
    {
        Session::forget('medico');
        return redirect()->route('medico.login.form');
    }
}