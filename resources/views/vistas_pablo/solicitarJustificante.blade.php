@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')

    <title>Área de alumnos</title>
    <div class="container">
        <h2>Solicitar Justificación</h2>
        <form action="/Alumno/justificaciones/email">
            <div class="form-group">
                <label for="materia">Motivo de la falta:</label>
                <textarea class="form-control" id="motivo"  name="motivo" required></textarea>
            </div>
            <div class="form-group">
                <label for="justificante">Justificante:</label>
                <br>
                <input type="file"  id="justificante" name="justificante">
            </div>
            <div class="form-group">
                <label for="date2">Día:</label>
                <input type="date" class="form-control" id="date2"  name="date2"required>
            </div>
            <div class="form-group">
                <label for="director">Director de carrera:</label>
                <input type="text" class="form-control" id="director" placeholder="Martín Antonio Santos Romero"  name="director" disabled>
            </div>


            <button type="submit"   class="btn-outline-success">Enviar</button>
        </form>
    </div>
@endsection
@section('sidebar')
    @include('includes.slider')
@endsection

