<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JuguetesModel extends Model{
    protected $table = "tb_juguetes";
    protected $primaryKey = "id_juguete";
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
