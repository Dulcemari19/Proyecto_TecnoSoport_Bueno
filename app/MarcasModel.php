<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcasModel extends Model{
    protected $table = "tb_marcas";
    protected $primaryKey = "id_marca";
    protected $fillable = [
            'clave',
            'nombre',    
    ];
}
