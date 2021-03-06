<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Asistencias extends Model
{

	protected $collection= 'collection_asistencias';
    protected $primaryKey='matricula_alumno';
    protected $connection = 'mongodb';

    public function Materias(){
	    return $this->belongsTo('App\Asignaturas','matricula_alumno','matricula_alumno');
	}
    public function asiste(){
		return $this->belongsTo('App\Asistencias','matricula_alumno','matricula_alumno');
	}

	public function genericas(){
		 return $this->belongsTo('App\Genericas','matricula_alumno','matricula_alumno');
	}

	public function alumnos(){
		return $this->belongsTo('App\User','matricula','matricula_alumno');//primera llave al modelo que hacemos referencia
	}


}
