@extends('layouts.layoutsTablas')

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title" style="float:top">Maestro: 
              @foreach ($maestro as $datos)
                  {{$datos->nombre.' '.$datos->ape_pat.' '.$datos->ape_mat}}
              @endforeach
              </h3>

            </div>
 <div class="card-header">
              <h3 class="card-title" style="text-align: center">Materia:
                @foreach ($maestro as $datos)
                {{$datos->nombre_materia}}
            @endforeach
              </h3>

            </div>
            <div class="card-header">
              <h3 class="card-title" style="text-align: center">Grupo:
                {{$datos->Id_grupo}}
              </h3>

            </div>
            
</div>

            <!-- /.card-header -->
            <div class="card-body">
                <form action="">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Matricula</th>
                  
                  <th>Nombre</th>
                
                  <th>Fecha</th>
                    <th>Asistencia/Falta</th>
                </tr>
                </thead>
              
                <tbody>
            
              @foreach ($genericas as $gene)
              @foreach ($asignaturas as $asig)
                  
          
                  <tr>
             
                     <td>
                  {{$gene->matricula_alumno}}
                  </td>
                 
                  <td>
                    {{$asig->nombre}}
                  </td>
                    <td>
                    
                    </td>

                    <td>
                       
                    </td>
                
                </tr>
                @endforeach
    @endforeach
          
   </tbody>
              

              </table>
                <input type="submit" class="btn-outline-success" value="Grabar día" style="float:right;">
                </form>
            </div>
            <!-- /.card-body -->
          </div>


    @endsection
@section('sidebar')
    @include('includes.sidebar')
    @endsection
