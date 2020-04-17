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
                @foreach ($asignaturas as $dato)
               {{$dato->Id_grupo}}
              @endforeach
              </h3>

            </div>
            <div class="card-header">
              <h3 class="card-title" style="text-align: center">Materia:
                @foreach ($asignaturas as $dato)
               {{$dato->nombre_materia}}
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
                    
                      
                     

     
            
                    
                    </tr>
                    
                    @endforeach

                </tbody>

              </table>


            </div>

            
            
            <!-- /.card-body -->

          </div>

          <form action="{{ route('GenerarPDF') }}" target="_blank">
               
             
            

            <label for="grupo" >Grupo:</label>
            <select class="form-control form-control-lg" name="id_grupo">
            @foreach ($asignaturas as $Materia)
         
            <option value="{{$Materia->Id_grupo}}">{{$Materia->Id_grupo}}</option>
           
           @endforeach  

</select>  
<label for="grupo" >Materia:</label>
<select class="form-control form-control-lg" name="Id_asignatura">
  @foreach ($asignaturas as $Materia)
  
  <option  value="{{$Materia->Id_Asignatura}}">{{$Materia->nombre_materia}}</option>
 
 @endforeach  

</select> 
<div class="form-group">
  <label for="date1">Fecha inicial:</label>
  <input type="date" class="form-control" id="date1"  name="date1">
</div>


<div class="form-group">
  <label for="date2">Fecha final:</label>
  <input type="date" class="form-control" id="date2"  name="date2">
</div>
 
<input type="submit" class="btn-outline-success" value="Generar PDF" style="float: right;">
             
              </form>


@endsection
@section('footer')
    @include('includes/sidebarcarrera')
    @endsection