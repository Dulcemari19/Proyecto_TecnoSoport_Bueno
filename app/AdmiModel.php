<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmiModel extends Model {
    protected $table = "tb_admi";
    protected $primaryKey = "id_admi";
    protected $fillable = [
            'nombre',
            'apellidos',
            'direc',
            'tel',
            'email',
            'pass',
    ];
}
