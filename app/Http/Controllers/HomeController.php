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
        
       $id=Auth::User()->id;
        $tipo=user::find($id);
        if ($tipo->email == Auth::User()->email && $tipo->password == Auth::User()->password && $tipo->Tipo_usuario == '2')  {
             return view('vistas_alejandro.primeraVentanaMaestro');
        }elseif ($tipo->email == Auth::User()->email && $tipo->password == Auth::User()->password && $tipo->Tipo_usuario == '1') {
            return view('vistas_pablo.solicitarJustificante');
        }
        
    
    }
}
