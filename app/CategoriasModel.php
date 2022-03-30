<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model{
    protected $table = "tb_categorias";
    protected $primaryKey = "id_categoria";
    protected $fillable = [
            'clave',
            'nombre',    
    ];
}
