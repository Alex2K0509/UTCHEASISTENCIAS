@extends('layouts.layoutsTablas')

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title" style="float:top">Nombre del maestro</h3>

            </div>
 <div class="card-header">
              <h3 class="card-title" style="text-align: center">Captura de asistencias</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Matricula</th>
                  <th>Grupo</th>
                  <th>Nombre</th>
                  <th>Materia</th>
                  <th>Fecha</th>
                    <th>Asistencia/Falta</th>
                </tr>
                </thead>
                <tbody>

                
                      
               
                 
              
              
              
                      
                  @if ($genericas->count() > 0)
                  @foreach ($genericas as $gene)
                      
                 @foreach ($asignaturas as $materia)
                
                  
                <tr>
                  
               <td>
  
           {{$gene->matricula_alumno}}
 
  
               </td>  
              
                
                <td>
                 {{$gene->Id_grupo}}

                  </td>

                  <td>
                   {{$materia->nombre.' '.$materia->ape_pat.' '.$materia->ape_mat}}
                  </td>

                  <td>
                 
                  </td>
                    <td>
                    
                    </td>

                    <td>
                       
                    </td>
                </tr>
                @endforeach  
                @endforeach   
                @endif
              
              
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
