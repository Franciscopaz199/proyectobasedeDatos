<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $table = 'centros';

    protected $fillable = [
        'id_universidad',
        'nombre_centro',
        'correo_electronico',
        'direccion',
    ];

    public function universidad()
    {
        return $this->belongsTo(Universidad::class, 'id_universidad');
    }

    // relacion de muchos a muchos con carrera en la tabla carreras_centros
    public function carreras()
    {
        return $this->belongsToMany(Carrera::class, 'carreras_centros', 'id_centro', 'id_carrera');
    }

}
