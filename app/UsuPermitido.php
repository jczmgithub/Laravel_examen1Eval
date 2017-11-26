<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuPermitido extends Model
{
    protected $table = 'usuPermitidos';
    protected $fillable = [
        'nombreUsu', 'permiso',
    ];

    function hasPermiso() {
        return $this->permiso;
    }
}
