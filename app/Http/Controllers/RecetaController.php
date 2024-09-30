<?php

namespace App\Http\Controllers;
use App\Models\Receta;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'rutPaciente' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'estadoReceta' => 'required|string|max:255',
            'fechaCreacion' => 'required|date',
            'comentario' => 'nullable|string',
        ]);

        // Crear una nueva receta
        Receta::create([
            'rutPaciente' => $request->rutPaciente,
            'nombre' => $request->nombre,
            'estadoReceta' => $request->estadoReceta,
            'fechaCreacion' => $request->fechaCreacion,
            'comentario' => $request->comentario,
        ]);
 
        // Redirigir o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'Receta generada exitosamente.');
    }
}
