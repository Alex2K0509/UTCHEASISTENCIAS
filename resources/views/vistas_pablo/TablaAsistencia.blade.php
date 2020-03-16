@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:top">Nombre del alumno</h3>

        </div>
        <div class="card-header">
            <h3 class="card-title" style="text-align: center">Vizualizcion general de asistencias</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Grupo</th>
                        <th>Materia</th>
                        <th>Asistencias</th>
                        <th>Faltas</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>8118110121</td>
                        <td>TIAM5</td>
                        <td>Ingles V</td>
                        <td>16</td>
                        <td>0</td>

                    </tr>
                    <tr>
                        <td>8118110121</td>
                        <td>TIAM5</td>
                        <td>IOT</td>
                        <td>30</td>
                        <td>2</td>
                    </tr>
                    <tr>
                     <td>8118110121</td>
                        <td>TIAM5</td>
                        <td>EOYE II</td>
                        <td>18</td>
                        <td>0</td>



                    </tr>

                    </tbody>

                </table>
            </form>
        </div>
        <!-- /.card-body -->
    </div>


@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
