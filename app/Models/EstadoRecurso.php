<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoRecurso extends Model
{
    use HasFactory;

    protected $table = 'estados_recursos';

    protected $fillable = [
        'nombre_estado_recurso',
    ];
}
