@extends('layouts.layoutsTablas')

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title" style="float:top">Nombre del maestro:</h3><br>
              <td>Fernando Uco</td>
              


            </div>
 
            <!-- /.card-header -->
            <div class="card-body">
                <form action="">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID_Maestro</th>
                  <th>Materia</th>
                  <th>Grupo</th>
                  <th>Horarios</th>
                  
                </tr>
                </thead>
                <tbody>

                <tr>
                  <td>Uco_1</td>
                  <td>Integradora</td>
                  <td>5TIAM</td>
                  <td>"Horarios"</td>
                    


                </tr>
                <tr>
                  <td>Villanueva_1</td>
                  <td>Base de Datos</td>
                  <td>5TIAM</td>
                  <td>"Horarios"</td>
                  
                  
                </tr>


                </tbody>

              </table>
                <input type="submit" class="btn-outline-success" value="Agregar Docente" style="float:right;">
                </form>
            </div>
            <!-- /.card-body -->
          </div>


    @endsection
@section('sidebar')
    @include('includes.sidebar')
    @endsection
