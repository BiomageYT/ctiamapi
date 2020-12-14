<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table = 'tienda';

    protected $fillable = [
        'id', 'nombre', 'descripcion', 'telefono', 'email', 'pagina_web','imagen'
    ];
}