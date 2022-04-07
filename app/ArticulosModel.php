<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticulosModel extends Model
{
    protected $table = "tb_articulos";
    protected $primaryKey = "id_articulo";
    protected $fillable = [
            'nombre',    
            'img',
            'des',
            'pre',
            'tipo',
            'marca',
            'categoria',
    ];

    public function scopeBuscar($query, $buscar){
        if(trim($buscar) != ""){
            $query->where(\DB::raw('nombre'), "LIKE", "%".$buscar."%");
        }
    }
}
