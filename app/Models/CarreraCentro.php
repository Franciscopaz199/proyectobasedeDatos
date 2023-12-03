<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraCentro extends Model
{
    use HasFactory;

    protected $table = 'carreras_centros';


    protected $fillable = [
        'id_carrera',
        'id_centro',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }

    public function centro()
    {
        return $this->belongsTo(Centro::class, 'id_centro');
    }

}
