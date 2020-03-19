<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;


class Asignaturas extends Model
{
  protected $primarykey='matricula';
protected $collection= 'collection_asignaturas';
}
