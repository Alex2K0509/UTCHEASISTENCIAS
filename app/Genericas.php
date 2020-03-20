<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Asignaturas;
use App\Asistencias;
class Genericas extends Model
{

protected $collection= 'collection_generica';
protected $primaryKey='matricula';
protected $connection = 'mongodb';

public function Materias(){
    return $this->hasMany('App\Asignaturas','matricula','matricula');
}
public function MateriasAlumnos(){
    return $this->hasMany('App\Asignaturas','matricula_alumno','matricula_alumno');
}



}

