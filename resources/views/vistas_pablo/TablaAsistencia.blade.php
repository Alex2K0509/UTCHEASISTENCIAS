@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')

    
    <!-- /.card-header -->
    {{--Tabla de asistencias--}}
    <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="float:top">Concentrado de asistencias</h3>

        </div>
        <div class="card-header">
            {{---El if  es para ver si hay una relacion entre la coleccion usuarios y la coleccion generica, puede ser un count exist --}}
            @if ($user->genericas()->count() > 0)

                @foreach ($user->genericas as $generica)

                    @foreach ($generica->Materias2 as $Materia)

                        @foreach($Materia->carreras as $carrera)
                            {{--Los foreachs anteriores son para relacionar el usuario con una carrera para obtener la carrera del alumno--}}
                            <h3 class="card-title" style="text-align: center">Carrera: {{$carrera->carrera}}</h3>

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
                    {{--Obtencion de los datos--}}
                    @foreach ($asistencias as $asistencia){{--Foreach necesario para  obtener la informacion relacionada  con la asistencia--}}
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
