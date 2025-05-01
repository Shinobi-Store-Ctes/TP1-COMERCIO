<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'nombre_completo',
        'nacimiento',
        'foto',
        'github',
        'linkedin',
        'mail',
    ];
}
