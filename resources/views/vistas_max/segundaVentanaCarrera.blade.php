@extends('layouts.carrera2')

@section('title','Area de D.Carrera')


@section('content')

<section class="content">
        <div class="container">
  <h1>Generar reporte de asistencias</h1>

  <form method="GET" action="{{ route('AreaCarreraTabla') }}">

 

<div class="form-group">
      
      
      
    </div>
<div class="btn-group-vertical">
      <label for="grupo" >Grupo:</label>
     <select class="form-control form-control-lg" name="id_grupo">
      

      @foreach ($asignaturas as $asig)
      <option value="{{$asig->Id_grupo}}">{{$asig->Id_grupo}} </option>
            @endforeach

</select>

    </div>
    <br>
    
    <label for="grupo" >Materia:</label>
    <select class="form-control form-control-lg" name="Id_asignatura">


      @foreach ($asignaturas as $asig)
      <option value="{{$asig->Id_Asignatura}}">{{$asig->nombre_materia}} </option>
            @endforeach
      
        
      </select>
     

<br><br>
    <button type="submit" class="btn-outline-success" style="float: center;">Solicitar reporte</button>
  </form>
</div>
          <!-- /.row -->
    </section>

@endsection
@section('footer')
    @include('includes/sidebarcarrera')
    @endsection
