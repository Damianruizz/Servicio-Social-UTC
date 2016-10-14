<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
    protected $fillable = [
        'Nombre', 'Apellido_Paterno', 'Apellido_Materno', 'Contrasena', 'Matricula', 'Grupo_id', 'company_id',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function grupo()
    {
        return $this->belongsTo('App\GrupoModel');
    }
}
