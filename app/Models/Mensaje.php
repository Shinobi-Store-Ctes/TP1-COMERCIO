<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'mensajes'; // Nombre de la tabla 

    protected $primaryKey = 'id'; // Clave primaria de la tabla

    protected $fillable = [
        'nombre',
        'email',
        'mensaje',
        'fecha_envio',
    ];
}