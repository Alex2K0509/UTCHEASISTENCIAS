@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <title>Area de alumnos</title>
    <form action="{{route('AlumnosVisualizar')}}" >
        <div class="container">
            <h2>Visualizar asistencia</h2>
            <div class="form-group">
                <label for="date3">Fecha Inicial</label>
                <input type="date" class="form-control" id="date3"  name="date3" required>
            </div>


            <div class="form-group">
                <label for="datea">Fecha Final</label>
                <input type="date" class="form-control" id="date4"  name="date4" required>
            </div>

            <input type="submit" class="btn-outline-success" style="float: right" value="Solicitar asistencias">

        </div>
    </form>

@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
