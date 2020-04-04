<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class genericaD extends Model
{

    protected $collection= 'collection_generica';
    protected $primaryKey='Id_carrera';
    protected $connection = 'mongodb';

    public function directores(){
        return $this->hasMany('App\Director','Id_carrera','Id_carrera');
    }


}
