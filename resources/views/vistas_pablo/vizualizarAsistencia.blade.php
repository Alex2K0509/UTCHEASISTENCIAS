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
                <label for="date3">Fecha Inicial</label>
                <input type="date" class="form-control" id="fecha1"  name="fecha1" required>
            </div>


            <div class="form-group">
                <label for="datea">Fecha Final</label>
                <input type="date" class="form-control" id="fecha2"  name="fecha2" required>
            </div>

            <input type="submit" class="btn-outline-success" style="float: right" value="Solicitar asistencias">

        </div>
    </form>

@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
