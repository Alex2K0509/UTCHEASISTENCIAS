<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
class prueba extends Model
{
    protected $collection= 'prueba';
  
    protected $connection = 'mongodb';
}
