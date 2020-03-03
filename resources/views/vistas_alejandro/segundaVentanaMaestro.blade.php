@extends('layouts.layoutsTablas')

@section('title','Area de maestros')

@section('content')


<div class="table-responsive">
  <form action="{{route('AreaMaestroActualizar')}}" >
<table class="table table-bordered">
<thead>
  <tr>
    <th scope="col" colspan="4" style="text-align: center";>Nombre del Maestro</th>
    <th scope="row">
    <select>

<option>Fernando Uco</option>
<option>Carlos Villanueva</option>

    </select>
    </th>
  </tr>



</thead>

<tbody>

 <tr>
    <th scope="row">Materia</th>
    <th scope="row">Grupo</th>
     <th scope="row">Horarios</th>

  </tr>


  <tr>
    <th scope="row">
    <select>

<option>INFORMATICA</option>
<option>IOT</option>

    </select>
    </th>


    <td>
        <select>

<option>TIAM5 </option>
<option>TIAM2</option>
>

</select>

    </td>
      <td>
  <input type="date">

</td>
  </tr>


</tbody>
</table>
<input type="submit" class="btn-outline-success" style="float: right" value="Agregar Maestro">
</form>
                          </div>





@endsection
@section('footer')
    @include('includes/sidebar')
    @endsection
