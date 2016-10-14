<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarreraModel extends Model
{
    protected $table = 'carrera';
    protected $fillable = [
        'carrera',
    ];

    public function grupos()
    {
        return $this->hasMany('App\GrupoModel');
    }
}
