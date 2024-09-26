<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $fillable = ['nombre', 'apellido', 'cargo'];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function getCargo()
    {
        return $this->cargo->nombre;
    }

}
