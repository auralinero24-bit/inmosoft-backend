<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    // El nombre de la tabla en la base de datos
    protected $table = 'propiedades';

    // Los campos que permitimos guardar
    protected $fillable = ['nombre_inmueble', 'ubicacion', 'valor', 'estado'];
}