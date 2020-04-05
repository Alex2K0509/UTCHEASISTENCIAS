<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       $id=Auth::User()->matricula;
      //$user = user::find($id);

       $email=Auth::user()->email;
        $nombre=Auth::user()->name;
        $apepat=Auth::user()->ApePat;
        $apemat=Auth::user()->ApeMat;


    $user=user::find($id);//analizar la opcion de user=2 porque laravel maneja sesisones para cada login

    if ($user->email == Auth::User()->email && $user->password == Auth::User()->password && $user->Tipo_usuario == '2')  {
             return view('vistas_alejandro.primeraVentanaMaestro',compact('user','nombre','apepat','apemat'));
        }elseif ($user->email == Auth::User()->email && $user->password == Auth::User()->password && $user->Tipo_usuario == '1') {

            return view('vistas_pablo.solicitarJustificante',compact('email','user','nombre','apepat','apemat'));

        }elseif ($user->email == Auth::User()->email && $user->password == Auth::User()->password && $user->Tipo_usuario == '3') {
             return view('vistas_max.primeraVentanaCarrera',compact('user','nombre','apepat','apemat'));

        }elseif ($user->email == Auth::User()->email && $user->password == Auth::User()->password && $user->Tipo_usuario == '4') {
             return view('vistas_ramiro.ventanaPrincipalAdmin',compact('user','nombre','apepat','apemat'));
        }


    }
}
