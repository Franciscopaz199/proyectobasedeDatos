<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemaDiscucion extends Model
{
    use HasFactory;

    protected $table = 'temas_discusion';

    protected $fillable = [
        'id_recurso',
        'id_estado_tema',
        'id_estudiante',
        'id_categoria_tema',
        'titulo_tema',
        'descripcion',
    ];


    public function recurso()
    {
        return $this->belongsTo(Recurso::class, 'id_recurso');
    }

    public function estadoTema()
    {
        return $this->belongsTo(EstadoTema::class, 'id_estado_tema');
    }


    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    public function mensajesTemas()
    {
        return $this->hasMany(MensajeTema::class, 'id_tema_discusion');
    }

    public function categoriaTema()
    {
        return $this->belongsTo(CategoriaTema::class, 'id_categoria_tema');
    }


}
