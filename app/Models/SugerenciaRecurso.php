<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SugerenciaRecurso extends Model
{
    use HasFactory;

    protected $table = 'sugerencias_recursos';


    protected $fillable = [
        'id_recurso_version',
        'titulo_sugerencia',
        'contenido_sugerencia',
    ];


    public function recurso_version()
    {
        return $this->belongsTo(RecursoVersion::class, 'id_recurso_version');
    }


}
