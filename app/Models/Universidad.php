<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    use HasFactory;
    protected $table = 'universidades';
    
    protected $fillable = [
        'nombre_universidad',
        'logo'
    ];


    // relacion muchos a muchos con facultades en la tabla facultades_universidades

    public function facultades()
    {
        return $this->belongsToMany(Facultad::class, 'facultades_universidades', 'id_universidad', 'id_facultad');
    }
    
}
