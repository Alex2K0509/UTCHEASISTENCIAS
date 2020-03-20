<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Asignaturas;
use App\Asistencias;
use App\Genericas;
class Asignaturas extends Model
{
  protected $primarykey='matricula';
protected $collection= 'collection_asignaturas';

public function Asistencias(){
  return $this->hasMany('App\Asistencias','matricula_alumno','matricula_alumno');
}
}
