@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <title>Area de alumnoss</title>
    <div class="container">
        <h2>Solicitar Justificación</h2>
        <form action="#">
            <div class="form-group">
                <label for="materia">Motivo de la falta:</label>
                <input type="text" class="form-control" id="motivo"  name="motivo">
            </div>
            <div class="form-group">
                <label for="justificante">Justificante:</label>
                <br>
               <input type="file"  id="justificante" name="justificante">
            </div>
            <div class="form-group">
                <label for="date2">Dia:</label>
                <input type="date" class="form-control" id="date2"  name="date2">
            </div>
            <div class="form-group">
                <label for="director">Director de carrera:</label>
                <input type="text" class="form-control" id="director"  name="director" disabled>
            </div>


            <button type="submit"  class="btn-outline-success">Enviar</button>
        </form>
    </div>
@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
