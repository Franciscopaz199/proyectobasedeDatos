<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorRecurso extends Model
{
    use HasFactory;

    protected $table = 'autores_recursos';

    protected $fillable = [
        'id_recurso',
        'id_estudiante',
    ];

    public function recurso()
    {
        return $this->belongsTo(Recurso::class, 'id_recurso');
    }

    // realacion uno a muchos inversa con estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    public function getNombreEstudianteAttribute()
    {
        return $this->estudiante->user->name;
    }
}
