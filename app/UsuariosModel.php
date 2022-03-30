<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model{
    protected $table = "tb_usuarios";
    protected $primaryKey = "id_usuario";
    protected $fillable = [
            'nombre',
            'apellidos',
            'direc',
            'tel',
            'email',
            'pass',
    ];
}
