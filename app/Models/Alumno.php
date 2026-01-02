<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = [
        'codigo_alumno',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'genero',
        'email',
        'telefono',
        'direccion',
        'fecha_inscripcion',
        'activo',
    ];
}
