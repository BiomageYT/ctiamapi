<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'id', 'nombres', 'apellidos', 'avatar', 'dni', 'email','telefono','telefono_alternativo','password','is_seller','genero' 
    ];
}