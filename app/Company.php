<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $table = 'companies';
  protected $fillable = [
        'company', 'responsable1', 'tel1', 'email1', 'address',
    ];
    //

    public function alumnos()
    {
        return $this->hasMany('App\Alumno');
    }
}
