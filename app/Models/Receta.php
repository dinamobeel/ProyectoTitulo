<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    //Auí se especifica el nombre de la tabla en la cual se van a guardar los datos desde el controlador RecetaController
    protected $table = 'recetatest2';

    // Aquí se especifican los campos que se pueden llenar desde el controlador RecetaController
    protected $fillable = [
        'rutPaciente',
        'nombre',
        'estadoReceta',
        'fechaCreacion',
        'comentario',
    ];

     // Desactivar las marcas de tiempo automáticas
     public $timestamps = false;
}
