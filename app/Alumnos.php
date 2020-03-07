<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class Alumnos extends Model
{
protected $primaryKey='matricula_alumno';
protected $collection= 'UTCHEASIST2';
}
