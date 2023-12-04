<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use HasFactory;

    protected $table = 'recursos';

    protected $fillable = [
        'id_clase_carrera',
        'titulo_recurso',
        'descripcion',
        'fecha_subida',
    ];


    // relacion muchos  a muchos con estudiantes en la tabla autores_recursos
    public function autores()
    {
        return $this->belongsToMany(Estudiante::class, 'autores_recursos', 'id_recurso', 'id_estudiante');
    }


    // relacion uno a muchos inversa con clase_carrera

    public function clase_carrera()
    {
        return $this->belongsTo(ClaseCarrera::class, 'id_clase_carrera');
    }


    // relacion uno a muchos con autores_recursos

    public function autores_recursos()
    {
        return $this->hasMany(AutoresRecursos::class, 'id_recurso');
    }

    // relacion uno a muchos con recursos_versiones

    public function RecursoVersion()
    {
        return $this->hasMany(RecursoVersion::class, 'id_recurso');
    }
    

    // relacion uno a muchos con temas_discuciones

    public function temas_discuciones()
    {
        return $this->hasMany(TemaDiscucion::class, 'id_recurso');
    }


    
    

}
