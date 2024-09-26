<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_empleado';
    const CREATED_AT = 'fecha_creada';
    const UPDATED_AT = 'fecha_actualizada';
    protected $atributos = [
        'nombre' => 'Nombre del empleado',
        'apellido' => 'Apellido del empleado',
        'fecha_nacimiento' => 'Fecha de nacimiento del empleado',
        'fecha_ingreso' => 'Fecha de ingreso del empleado',
        'salario' => 'Salario del empleado',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_ingreso' => 'date',
        'salario' => 'decimal:2',
    ];
}
