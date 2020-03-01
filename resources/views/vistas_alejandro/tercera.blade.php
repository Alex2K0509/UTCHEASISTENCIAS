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
                  <td>8118110121</td>
                  <td>TIAM5</td>
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
