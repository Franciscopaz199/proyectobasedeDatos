<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursoVersion extends Model
{
    use HasFactory;

    protected $table = 'recursos_versiones';

    protected $fillable = [
        'id_recurso',
        'id_version_recurso',
        'id_estado_recurso',
        'enlace_descarga',
        'descripcion',
    ];

    public function recurso()
    {
        return $this->belongsTo(Recurso::class, 'id_recurso');
    }

    // relacion uno a muchos con comentarioAutor
    public function comentarios()
    {
        return $this->hasMany(ComentarioAutor::class, 'id_recurso_version');
    }



    // relacion uno a muchos con estadoRecurso

    public function estadoRecurso()
    {
        return $this->belongsTo(EstadoRecurso::class, 'id_estado_recurso');
    }

    // relacion uno a muchos con versionRecurso

    public function versionRecurso()
    {
        return $this->belongsTo(VersionRecurso::class, 'id_version_recurso');
    }


    // relacion uno a muchos con estudiante

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    // relacion uno a muchos con sugerenciaRecurso

    public function sugerencias()
    {
        return $this->hasMany(SugerenciaRecurso::class, 'id_recurso_version');
    }

    

}
