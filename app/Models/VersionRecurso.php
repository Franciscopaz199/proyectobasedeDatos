<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VersionRecurso extends Model
{
    use HasFactory;

    protected $table = 'versiones_recursos';

    protected $fillable = [
        'nombre_version_recurso',
    ];


    
}
