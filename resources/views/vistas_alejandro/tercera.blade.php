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
                @foreach ($maestro as $datos)
                {{$datos->Id_grupo}}
              </h3>
              @endforeach
            </div>
            <div class="card-header">
              <h3 class="card-title" style="text-align: center">Horario:
                @foreach ($horarios as $entrada)
               {{$entrada->entrada.' - '.$entrada->salida}}
              @endforeach
              </h3>

            </div>


            <!-- /.card-header -->
            <div class="card-body">

                  
             
               
                
                  <table id="example1" class="table table-bordered table-striped">

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
                    @if($dato3 == $gene->asiste->fecha)
                      <tr>
                        <td>{{ $gene->matricula_alumno }}</td>
                        <td>@if(!empty($gene->alumno->name)){{ $gene->alumno->name.' '.$gene->alumno->ApePat.' '.$gene->alumno->ApeMat }} @endif</td>
                        <td>{{ $gene->asiste->fecha }}</td>

                        <td>
                        <form action="{{ route('Asistencia.update',$gene->matricula_alumno) }}" method="POST"  >
                    @csrf
                 
                        <select name="estados">
                         
                          <option  >{{ $gene->asiste->estado }}</option>
                          <option value="asistencias">ASISTENCIA</option>
                          <option value="faltas">FALTA</option>
                        </select>
                        <input type="submit" class="btn-outline-success" value="Grabar día" style="float:right;">

                   </form>
                        </td>
                        <td><option  >{{ $gene->asiste->estado }}</option></td>
                      </tr>
                    @endif
                @endforeach       
                </tbody>
              </table>
               
                
            </div>
            <!-- /.card-body -->
          </div>


    @endsection
@section('sidebar')
    @include('includes.sidebar')
    @endsection
