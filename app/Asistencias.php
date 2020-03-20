<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Asignaturas;
use App\Genericas;
use App\user;
class Asistencias extends Model
{
    protected $primaryKey='matricula_alumno';
protected $collection= 'collection_asistencias';
}
