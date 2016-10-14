<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoModel extends Model
{
    protected $table = 'grupo';
    protected $fillable = [
        'Truno_id', 'Carrera_id', 'Cuatrimestre_id', 'Grupo',
    ];

    public function alumnos()
    {
        return $this->hasMany('App\Alumno');
    }
}
