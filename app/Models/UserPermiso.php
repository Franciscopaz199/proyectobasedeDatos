<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermiso extends Model
{
    use HasFactory;

    protected $table = "users_permisos";


    protected $fillable = [
        'id_user',
        'id_permiso',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function permiso()
    {
        return $this->belongsTo(Permiso::class, 'id_permiso');
    }

    

    
}
