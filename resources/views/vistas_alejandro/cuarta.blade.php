@extends('layouts.layoutsTablas')
@section('content')
    <div class="container">
  <h2>Asignar Materia</h2>
  <form action="{{ route('AreaMaestroReporteListo') }}">
<div class="form-group">
      <label for="materia">Materia:</label>
      <select id="materia" class="custom-select">
          <option>IoT</option>
      </select>
    </div>
<div class="form-group">
      <label for="grupo">Grupo:</label>
      <select id="grupo" class="custom-select">
          <option>TIAM5</option>
      </select>
      <div class="form-group">
      <label for="grupo">Docente:</label>
      <select id="grupo" class="custom-select">
          <option>Fernando Uco</option>
      </select>
    
    <div class="form-group">
      <label for="date2">Horarios:</label>
      <input type="date" class="form-control" id="date2"  name="date2">
    </div>


    <button type="submit"  class="btn-outline-success">Subir Materia</button>
  </form>
</div>
    @endsection
@section('sidebar')
    @include('includes.sidebar')
    @endsection
