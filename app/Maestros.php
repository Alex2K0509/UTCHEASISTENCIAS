<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Maestros extends Model
{
 
    protected $collection= 'prueba';
    protected $connection = 'mongodb';

    protected $fillable = [
        'name', 'email', 'password', 'ApePat', 'ApeMat', 'Rfid', 'Tipo_usuario','matricula'
            ];
}
