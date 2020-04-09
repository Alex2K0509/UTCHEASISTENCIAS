@extends('layouts.layoutsTablas')
@section('content')
    <div class="container">
  <h2>Visualizar asistencias por periodos de fechas</h2>
  <form method="GET" action="{{ route('AreaMaestroReporteListo') }}">

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
        <select id="grupo" class="custom-select" name="grupo">
          @foreach ($asignaturas as $asig)
          <option value="{{$asig->Id_grupo}}">{{$asig->Id_grupo}} </option>
                @endforeach

        </select>
</div>


<div class="form-group">
      <label for="date1">Fecha inicial:</label>
      <input type="date" class="form-control" id="date1"  name="date1">
</div>


<div class="form-group">
      <label for="date2">Fecha final:</label>
      <input type="date" class="form-control" id="date2"  name="date2">
</div>


    <button type="submit"  class="btn-outline-success">Solicitar reporte</button>
  </form>
</div>
    @endsection
@section('sidebar')
    @include('includes.sidebar')
    @endsection
