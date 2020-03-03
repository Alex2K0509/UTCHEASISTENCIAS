@extends('layouts.layoutsTablas')
@section('content')

          <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="float:top">Nombre del Materia</h3>

            </div>
 <div class="card-header">
              <h3 class="card-title" style="text-align: center">Nombre de la carrera</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="">
                    <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id_Materia</th>
                  <th>Grupo</th>
                  <th>Materia</th>
                  <th>Horarios</th>
                    

                </tr>
                </thead>
                <tbody>

                <tr>
                  <td>MAT1</td>
                  <td>TIAM5</td>
                  <td>Matemáticas</td>
                  <td>"Horario"</td>

                </tr>
                <tr>
                  <td>IoT1</td>
                  <td>TIAM5</td>
                  <td>Fundamentos de IoT</td>
                  <td>"Horarios"</td>
                </tr>


                </tbody>

              </table>
                   </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>

@endsection()

@section('sidebar')
    @include('includes.sidebar')
    @endsection
