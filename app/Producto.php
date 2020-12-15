<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = [
        'id', 'id_tienda', 'id_categoria', 'id_marca', 'id_estado', 'titulo','descripcion','detalle','precio','fecha','stock', 'imagen' 
    ];
}