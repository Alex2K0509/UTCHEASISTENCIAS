<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;



class User extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    use Notifiable;
    protected $primaryKey='matricula';
    protected $connection = 'mongodb';
   
    //protected $collection= 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
'name', 'email', 'password', 'ApePat', 'ApeMat', 'Rfid', 'Tipo_usuario','matricula'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    protected $collection='users'; 
    
    public function Genericas(){
        return $this->hasMany('App\Genericas','matricula','matricula');
    }

   
    
}
