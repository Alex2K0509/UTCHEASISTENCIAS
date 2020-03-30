<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Asistencias extends Model
{
	protected $collection= 'collection_asistencias';
    protected $primaryKey='matricula_alumno';
    protected $connection = 'mongodb';
}
