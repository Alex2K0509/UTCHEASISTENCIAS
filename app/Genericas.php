<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Genericas extends Model
{

	protected $collection= 'collection_generica';
	protected $primaryKey='matricula_alumno';
	protected $connection = 'mongodb';

	public function Materias(){
	    return $this->hasMany('App\Asignaturas','matricula_alumno','matricula_alumno');
	}

	public function asiste(){
		return $this->hasOne('App\Asistencias','matricula_alumno','matricula_alumno');
	}

	public function alumno(){
		 return $this->hasOne('App\User','matricula','matricula_alumno');
	}

	public function alumno2(){
		return $this->belongsTo('App\User','matricula_alumno','matricula');
   }

	

}
