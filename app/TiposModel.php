<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposModel extends Model{
    protected $table = "tb_tipos";
    protected $primaryKey = "id_tipo";
    protected $fillable = [
            'clave',
            'nombre',    
    ];
}
