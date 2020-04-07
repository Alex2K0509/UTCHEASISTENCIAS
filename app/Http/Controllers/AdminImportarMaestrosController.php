<?php

namespace App\Http\Controllers;
use App\Mestros;
use App\User;
use App\Imports\MaestrosImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class AdminImportarMaestrosController extends Controller
{
   
    public function index()
    {
        $users=User::all();
        return view('vistas_Ramiro.ventanaAgregarMaestro',compact('users'));
    }

    public function import(Request $request)
    {
        //$path1 = $request->file('file')->store('file'); 
        //$path=storage_path('app').'/'.$path1;  
        //$data = \Excel::import(new MaestrosImport,$path);
        //Excel::import(new MaestrosImport)->import(request()->file('file'));
        

        
    Excel::import(new MaestrosImport(),$request->file('import_file'));
    return redirect()->route('home')->with('success', 'Archivo Importado con exito!');;
        
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
        //return $request->file('');
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

    public function enviarchivo(Request $request){
            $fecha = date("Y-m-d h:m:s");
            $nombre = md5(time());
            $file = $request->file('file');
            $tipo = $file->getMimeType();
            switch($tipo){
                  case 'text/plain':            
                         \Storage::disk('local')->put('/public/'.$nombre.".csv", \File::get($file));
                  break;
                  default:
                   dd("Archivo Incorrecto");
                    //    dd($file);
            }       

            dd($tipo);
    }
}
