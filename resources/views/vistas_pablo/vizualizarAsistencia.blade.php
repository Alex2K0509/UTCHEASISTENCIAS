@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <?php


    ?>
    <title>Area de alumnos</title>
    <form action="{{route('AlumnosVisualizar')}}" >
        <div class="container">
            <h2>Visualizar asistencia</h2>

            <div class="form-group">
                <label for="materia">Materia:</label>
                <select id="materia" class="custom-select" name="materia">


                      @foreach ($asignaturas as $asig)
                <option value="{{$asig->Id_Asignatura}}">{{$asig->nombre_materia}} </option>
                      @endforeach


                </select>
            </div>


            <div class="form-group">
                <label for="grupo">Grupo:</label>
                <select id="grupo" class="custom-select" name="grupo" >
                    @foreach ($asignaturas as $asig)
                    <option value="{{$asig->Id_grupo}}">{{$asig->Id_grupo}} </option>
                          @endforeach

                </select>




            <div class="form-group">
                <label for="date3">Fecha Inicial</label>
                <input type="date" class="form-control" id="fecha1"  name="fecha1" required>
            </div>


            <div class="form-group">
                <label for="datea">Fecha Final</label>
                <input type="date" class="form-control" id="fecha2"  name="fecha2" required>
            </div>

            <input type="submit" class="btn-outline-success" style="float: right" value="Solicitar asistencias">

        </div>
        </div>
    </form>

@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
