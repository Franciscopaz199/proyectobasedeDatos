<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';


    protected $fillable = [
        'nombre_ciudad',
        'id_pais',
    ];


    public function pais()
    {
        return $this->belongsTo(Pais::class, 'id_pais');
    }
}
