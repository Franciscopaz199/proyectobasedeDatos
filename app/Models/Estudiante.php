<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';


    protected $fillable = [
        'id_carerra_centro',
        'id_user',
        'numero_cuenta',
    ];


    public function carrera_centro()
    {
        return $this->belongsTo(CarreraCentro::class, 'id_carrera_centro');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    

}
