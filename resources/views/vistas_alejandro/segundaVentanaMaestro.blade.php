@extends('layouts.layoutsTablas')

@section('title','Area de maestros')

@section('content')


<div class="table-responsive">
  <form method="GET" action="{{ route('AreaMaestroActualizar') }}" >
<table class="table table-bordered">
<thead>
  <tr>
    <th scope="col" colspan="4" style="text-align: center";>Nombre del maestro</th>

  </tr>
<tr>
    <th scope="col" colspan="4" style="text-align: center";>capturar asistencias</th>
</tr>


</thead>
<tbody>

 <tr>
    <th scope="row">Materia</th>
    <th scope="row">Grupo</th>
     <th scope="row">Fecha</th>

  </tr>


  <tr>
    <th scope="row">
      
      <select id="materia" class="custom-select" name="Id_asignatura">
        @foreach ($asignaturas as $asig)
        <option value="{{$asig->Id_Asignatura}}">{{$asig->nombre_materia}} </option>
              @endforeach
        
      </select>
    </th>

  <td>
   
    <select id="grupo" class="custom-select" name="Id_grupo">
      @foreach ($asignaturas as $asig)
      <option value="{{$asig->Id_grupo}}">{{$asig->Id_grupo}} </option>
            @endforeach

    </select>


</td>

      <td>
        <input class="form-control" type="date" name="fecha">
 

</td>
  </tr>


</tbody>
</table>
<input type="submit" class="btn-outline-success" style="float: right" value="Solicitar asistencias">
</form>
                          </div>





@endsection
@section('footer')
    @include('includes/sidebar')
    @endsection
