<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Genericas;
use App\Asignaturas;
use App\Http\AreaMaestroAsistenciasActualizarController;
use Auth;
class AreaCarreraPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('vistas_max.primeraVentanaCarrera');
         

    }

    public function index2()
    { $id =Auth::user()->matricula;
        //$user = user::find($id);//solo con user podemos acceder a cualquier relacion siempre que esta contenga el mismo primary key que user
        $user = User::find($id);
         
         return view('vistas_max.segundaVentanaCarrera',compact('user'));

    }

    public function index3()
    {
         $insertar_datoos = insertar_datos::all();

         return view('vistas_max.terceraVentanaCarrera', compact('insertar_datoos'));

    }

     





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
