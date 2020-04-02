@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Asistencia</th>
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



@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
