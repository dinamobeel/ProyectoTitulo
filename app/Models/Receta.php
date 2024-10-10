<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $table = 'Receta'; // Especificar la tabla Receta

    protected $fillable = [
        'rutPaciente', 'nombrePaciente', 'edadPaciente', 'sexoPaciente', 'fechaNacimientoPaciente', 'condicionMedicaPaciente',
        'fechaCreacion', 'diagnostico', 'comentario', 'nombreMedico', 'rutMedico', 'especialidadMedico',
    ];
}