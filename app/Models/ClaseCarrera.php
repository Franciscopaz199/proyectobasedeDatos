<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaseCarrera extends Model
{
    use HasFactory;

    protected $table = 'clases_carreras';

    protected $fillable = [
        'id_carrera',
        'id_clase',
    ];


    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'id_clase');
    }
}
