<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articulos extends Model
{
    protected $table = 'articulos';
    protected $primaryKey = 'articulo_id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'talle_id',
        'imagen',
        'imagen_hover',
        'fecha_creacion',
        'categoria_id',
        'cantidad'
    ];

    public function talles(): BelongsTo {
        return $this->belongsTo(Talles::class, 'talle_id', 'talle_id');
    }

    public function categorias(): BelongsTo {
        return $this->belongsTo(Categorias::class, 'categoria_id', 'categoria_id');
    }
}
