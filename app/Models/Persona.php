<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'id_sexo',
        'id_genero',
        'id_ciudad',
        'id_estado_civil',
        'nombre',
        'apellido',

    ];

    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'id_sexo');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero');
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }

    public function estado_civil()
    {
        return $this->belongsTo(EstadoCivil::class, 'id_estado_civil');
    }

    

    


}
