<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;
use Jense
class Generica extends Model
{
  protected $collection= 'Generica';

public function usuarios(){
	return $this->hasMany('App\user','_id','idusuario');
}
}
