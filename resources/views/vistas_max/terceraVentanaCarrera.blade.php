@extends('layouts.carrera2')

@section('title','Area de D.Carrera')


@section('content')



<div class="card">
            <div class="card-header">
              <h3 class="card-title" style="float:top">Concentrado de asistencias</h3>

            </div>
 <div class="card-header">
              <h3 class="card-title" style="text-align: center">Carrera: TSU-TECNOLOGIAS DE LA INFORMACION</h3>

            </div>
            <div class="card-header">
              <h3 class="card-title" style="text-align: center">Grupo:
            @foreach($asignaturas as $asig)

            {{$asig->Id_grupo}}

            @endforeach
              </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x:auto;">
               
              <table id="responsive" class="table table-bordered table-striped">
                <thead>
                <tr>
                <td style="text-align: center;">Matricula</td>
                <td style="text-align: center;">Alumno</td>
                <td style="text-align: center;">Fecha</td>
                <td style="text-align: center;">Asistencias</td>
                <td style="text-align: center;">Grupo</td>
                <td style="text-align: center;">Materia</td>
              
                </tr>
               
               
                <tr>

             
             
  
                </tr>
                </thead>
                <tbody>
                @foreach ($asistencias as $asistencia)
                    <tr>
                      <td>{{$asistencia->genericas->alumno2->matricula}}</td>
                      <td>{{$asistencia->genericas->alumno2->name.' '.$asistencia->genericas->alumno2->ApePat.' '.$asistencia->genericas->alumno2->ApeMat}}</td>
                      <td>{{ $asistencia->fecha }}</td>
                      <td>{{ $asistencia->estado }} </td>
                      <td>{{ $asistencia->Id_grupo }} </td>
                      
                      @if ($user->genericas()->count() > 0)
  {{---en este primer forech nos da sus genericas ---}}
  @foreach ($user->genericas as $generica)
     {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}
  @foreach ($generica->Materias as $Materias)
  
 <td> {{$Materias->nombre_materia}} </td>
@endforeach  
     
  @endforeach  
@endif
                      
                      </td>
                    </tr>
                    
                    @endforeach

                </tbody>

              </table>


            </div>

            <form action="{{ route('GenerarPDF') }}">
               
               <select type="submit" class="btn-outline-success" name="id_grupo"  style="float:right;">
               <br> 


  @if ($user->genericas()->count() > 0)
 
  @foreach ($user->genericas as $generica)
    
  @foreach ($generica->Materias as $Materias)
  <option>Seleccione grupo</option>
  <option value="{{$Materias->Id_grupo}}">{{$Materias->Id_grupo}}</option>
</select>
<br>

<br>


  <input type="submit" class="btn-outline-success" value="Generar PDF" style="float: right;">
  
@endforeach 
     
  @endforeach  
@endif
  
                
               
                </form>
            <!-- /.card-body -->

          </div>




@endsection
@section('footer')
    @include('includes/sidebarcarrera')
    @endsection


