<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Asistencias extends Model
{
<<<<<<< HEAD
    //protected $fillable = ['estado'];
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
=======
	protected $collection= 'collection_asistencias';
    protected $primaryKey='matricula_alumno';
    protected $connection = 'mongodb';
>>>>>>> 9c0cda472979bf96638e2691653c837bc31f27f7
}

