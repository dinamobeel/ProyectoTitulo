<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $table = 'Receta'; // Especificar la tabla Receta

    protected $fillable = [
        'id_receta', 
        'rut_paciente', 
        'nombre_paciente', 
        'edad_paciente', 
        'sexo', 
        'fecha_nacimiento',
        'condicion_medica',
        'fecha_creacion', 
        'diagnostico', 
        'comentarios', 
        'nombre_medico', 
        'rut_medico', 
        'especialidad_medico',
     ];
    }
{
     class Receta2 extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico');
    }
}

} 