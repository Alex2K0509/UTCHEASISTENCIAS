<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Asignaturas;
use App\Asistencias;
use App\Genericas;
use App\Horarios;
class Asignaturas extends Model
{
  protected $primaryKey='Id_Asignatura';
protected $collection= 'collection_asignaturas';

public function Asistencias(){
  return $this->hasMany('App\Asistencias','matricula_alumno','matricula_alumno');
}


}
