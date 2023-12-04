<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioAutor extends Model
{
    use HasFactory;

    protected $table = 'comentarios_autores';

    protected $fillable = [
        'id_recurso_version',
        'id_estudiante',
        'titulo_comentario',
        'contenido_comentario'
    ];

    public function recurso_version()
    {
        return $this->belongsTo(RecursoVersion::class, 'id_recurso_version');
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
}
