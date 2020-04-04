<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model;

class Director extends Model
{

    protected $collection= 'collection_carreras';
    protected $primaryKey='Id_carrera';
    protected $connection = 'mongodb';





}
