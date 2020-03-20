@extends('layouts.layoutsTablas')

@section('title','Area de maestros')

@section('content')


<div class="table-responsive">
  <form action="{{route('AreaMaestroActualizar')}}" >
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
    <select>


{{---el if es para ver si hay una relacion entree usuarios y generica, puede ser coun-exist---}}
  @if ($user->genericas()->count() > 0)
  {{---en este primer forech nos da sus genericas ---}}
  @foreach ($user->genericas as $generica)
     {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}
  @foreach ($generica->Materias as $Materias)
    <option value="{{ $materias->id_asignatura}}">
  {{$Materias->nombre_materia}}
  </option>
@endforeach  
     
  @endforeach  
@endif
  





    </select>
    </th>

 
    <td>
     
      

      <select>


{{---el if es para ver si hay una relacion entree usuarios y generica, puede ser coun-exist---}}
@if ($user->genericas()->count() > 0)
{{---en este primer forech nos da sus genericas ---}}
@foreach ($user->Genericas as $genericas)
   {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}

<option>
{{$genericas->Id_grupo}}
</option>

   
@endforeach  
@endif






    </select>


    </td>

      <td>
  <input type="date">

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
