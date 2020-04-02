<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model;

class Horarios extends Model
{

	protected $collection= 'collection_horarios';
	protected $primaryKey='Id_Asignatura';
	protected $connection = 'mongodb';
}
