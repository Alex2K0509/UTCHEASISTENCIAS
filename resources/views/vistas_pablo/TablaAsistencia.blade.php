@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')


    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col" colspan="3" style="text-align: center";>Visualizar asistencias</th>
            </tr>
            <tr>
                <th scope="col" colspan="3" style="text-align: center";>Nombre del alumno</th>

            </tr>



            <tr>
                <th scope="col" colspan="3" style="text-align: center";>Materia</th>
            </tr>

            <tr>
                <th scope="col" colspan="3" style="text-align: center";>Rango de fechas seleccionado:.</th>
            </tr>


            </thead>

            <tbody>

            <tr>
                <th scope="row">Asistencias</th>
                <th scope="row">Faltas</th>
                <th scope="row">Porcentaje de asistencia</th>

            </tr>


            <tr>
                <th scope="row">
                    <p>20</p>
                </th>
                <td>
                    <p>4</p>
                </td>
                <td>
                    80%
                </td>
            </tr>
            <tr>




            </tr>


            </tbody>
        </table>
        </form>
    </div>





@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
