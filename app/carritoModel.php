<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carritoModel extends Model
{
    protected $table = "carrito";
    protected $primaryKey = "id";
    protected $fillable = [
            'id_producto',    
            
    ];
}
