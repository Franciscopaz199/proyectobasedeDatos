<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'carreras';
    

    protected $fillable = [
        'id_facultad',
        'id_universidad',
        'nombre_carrera',
        'logo',
    ];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'id_facultad');
    }

    public function universidad()
    {
        return $this->belongsTo(Universidad::class, 'id_universidad');
    }

    // relacion muchos a muchos con clase en la tabla clases_carreras
    public function clases()
    {
        return $this->belongsToMany(Clase::class, 'clases_carreras', 'id_carrera', 'id_clase');
    }


    
}
