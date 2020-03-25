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
 
            <!-- /.card-header -->
            <div class="card-body">
                <form action="">
                    <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Matricula</th>
               
                  <th>Nombre</th>
                 
                  <th>27/02/2020</th>
                    <th>28/02/2020</th>
                    <th>29/02/2020</th>
                    <th>30/02/2020</th>

                </tr>
                </thead>
                <tbody>

                <tr>
                  <td>8118110121</td>
                  
                  <td>Alejandro Yosmar Landaverde Vergara</td>
                 
                    <td>Asistencia</td>
                    <td>Falta</td>
                    <td>Asistencia</td>
                    <td>Falta</td>

                </tr>
                <tr>
                  <td>8118110190</td>
                 
                  <td>Ramiro Flores Mariano</td>
               
                   <td>Asistencia</td>
                    <td>Falta</td>
                    <td>Asistencia</td>
                    <td>Falta</td>
                </tr>


                </tbody>

              </table>
                   </div>
                <input type="submit" class="btn-outline-success" value="Generar reporte PDF" style="float:right;">
                </form>
            </div>
            <!-- /.card-body -->
          </div>

@endsection()

@section('sidebar')
    @include('includes.sidebar')
    @endsection
