<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoTema extends Model
{
    use HasFactory;
    
    protected $table = 'estados_temas';

    protected $fillable = [
        'nombre_estado_tema',
    ];

    public function temas_discuciones()
    {
        return $this->hasMany(TemaDiscucion::class, 'id_estado_tema');
    }
}
