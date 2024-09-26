<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    public $fillable = ['nombre', 'descripcion', 'salario_base'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
