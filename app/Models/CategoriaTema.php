<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaTema extends Model
{
    use HasFactory;

    protected $table = 'categorias_temas';

    protected $fillable = [
        'nombre_categoria_tema',
    ];

    public function temas_discuciones()
    {
        return $this->hasMany(TemaDiscucion::class, 'id_categoria_tema');
    }

    
}
