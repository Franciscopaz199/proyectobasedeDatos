<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajeTema extends Model
{
    use HasFactory;

    protected $table = 'mensajes_temas';

    protected $fillable = [
        'id_tema_discucion',
        'id_estudiante',
        'contenido_mensaje',
    ];

    public function tema_discucion()
    {
        return $this->belongsTo(TemaDiscucion::class, 'id_tema_discucion');
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }


}
