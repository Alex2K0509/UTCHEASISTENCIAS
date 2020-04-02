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

       
    $tipo=user::find($id);//analizar la opcion de tipo=2 porque laravel maneja sesisones para cada login
    
    if ($tipo->email == Auth::User()->email && $tipo->password == Auth::User()->password && $tipo->Tipo_usuario == '2')  {
             return view('vistas_alejandro.primeraVentanaMaestro');
        }elseif ($tipo->email == Auth::User()->email && $tipo->password == Auth::User()->password && $tipo->Tipo_usuario == '1') {
            return view('vistas_pablo.solicitarJustificante');
        }elseif ($tipo->email == Auth::User()->email && $tipo->password == Auth::User()->password && $tipo->Tipo_usuario == '3') {
             return view('vistas_max.primeraVentanaCarrera');
        }elseif ($tipo->email == Auth::User()->email && $tipo->password == Auth::User()->password && $tipo->Tipo_usuario == '4') {
             return view('vistas_ramiro.ventanaPrincipalAdmin');
        }
        
    
    }
}
