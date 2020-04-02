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
                @endforeach
              </h3>


            </div>
            <div class="card-header">
              <h3 class="card-title" style="text-align: center">Horario:
                @foreach ($horarios as $entrada)
               {{$entrada->entrada.' - '.$entrada->salida}}
              @endforeach
              </h3>

            </div>
          </div>


            </div>
            <div class="card-header">
              <h3 class="card-title" style="text-align: center">Horario:
                @foreach ($horarios as $entrada)
               {{$entrada->entrada.' - '.$entrada->salida}}
              @endforeach
              </h3>

            </div>
          
          </div>
          

            <!-- /.card-header -->
          

            <div class="card-body">
              
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
                @foreach ($asistencias as $asistencia)
                    <tr>
                      <td>{{$asistencia->genericas->alumno2->matricula}}</td>
                      <td>{{$asistencia->genericas->alumno2->name.' '.$asistencia->genericas->alumno2->ApePat.' '.$asistencia->genericas->alumno2->ApeMat}}</td>
                      <td>{{ $asistencia->fecha }}</td>
                      <td>{{ $asistencia->estado }} </td>
                    </tr>
                    
                    @endforeach
              </tbody>

            <a href="{{ route('reporte')}}">imprimir pdf</a>
                  
            

           
            </table>
            </div>
            
            









              
            </table>
            
             
          </div>
        
          <!-- /.card-body -->

          </div>

@endsection()

@section('sidebar')
    @include('includes.sidebar')
    @endsection
