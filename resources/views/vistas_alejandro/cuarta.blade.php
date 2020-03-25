@extends('layouts.layoutsTablas')
@section('content')
    <div class="container">
  <h2>Generar reporte por periodos de fechas</h2>
  <form action="{{ route('AreaMaestroReporteListo') }}">

<div class="form-group">
      <label for="grupo">Materia:</label>
      <select id="grupo" class="custom-select">
          {{---el if es para ver si hay una relacion entree usuarios y generica, puede ser coun-exist---}}
  @if ($user->genericas()->count() > 0)
  {{---en este primer forech nos da sus genericas ---}}
  @foreach ($user->genericas as $generica)
     {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}
  @foreach ($generica->Materias as $Materias)
  <option>
  {{$Materias->nombre_materia}}
  </option>
@endforeach  
     
  @endforeach  
@endif
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
