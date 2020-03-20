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

                <tr>
<td>
  @if ($tabla->genericas()->count() > 0)
  {{---en este primer forech nos da sus genericas ---}}
  @foreach ($tabla->genericas as $generica)
     {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}
  @foreach ($generica->Materias as $Materias)

  {{$Materias->Id_Asignatura}}
  
@endforeach  
     
  @endforeach  
@endif
</td>  
                {{---primero entramos a generica pero con $tabla que es la que ya no jala de matricula del user si no de la matricula de alumno--}}  
                
                <td>
                    @if ($tabla->Genericas()->count() > 0)
                    {{---en este primer forech nos da sus genericas ---}}
                    @foreach ($tabla->Genericas as $generica){{---aqui entramos a el modelo genericas--}}  
                       {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}
                       @foreach ($generica->Materias as $Materias)

                       @foreach ($Materias->Asistencias as $Asistencias)
                           {{$Asistencias->estado}}
                       @endforeach
                       
                     @endforeach   
                       
                    @endforeach  
                  @endif

                  </td>
                  <td>Alejandro Yosmar Landaverde Vergara</td>
                  <td>Informatica</td>
                    <td><input type="date"></td>

                    <td>
                        <select>
                            <option>Asistencia</option>
                            <option>Falta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                  <td>8118110190</td>
                  <td>TIAM5</td>
                  <td>Ramiro Flores Mariano</td>
                  <td>Informatica</td>
                  <td><input type="date"></td>
                    <td>
                        <select>
                            <option>Asistencia</option>
                            <option>Falta</option>
                        </select>
                    </td>
                </tr>


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
