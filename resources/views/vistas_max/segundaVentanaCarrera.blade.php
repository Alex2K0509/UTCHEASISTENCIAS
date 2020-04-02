@extends('layouts.carrera2')

@section('title','Area de D.Carrera')


@section('content')

<section class="content">
        <div class="container">
  <h1>Generar reporte de asistencias</h1>

  <form action="{{ route('AreaCarreraTabla') }}">

 

<div class="form-group">
      
      
      
    </div>
<div class="btn-group-vertical">
      <label for="grupo" >Grupo:</label>
     <select class="form-control form-control-lg" name="id_grupo">
      <option>Seleccione grupo</option>


  @if ($user->genericas()->count() > 0)
 
  @foreach ($user->genericas as $generica)
    
  @foreach ($generica->Materias as $Materias)

  <option value="{{$Materias->Id_grupo}}">{{$Materias->Id_grupo}}</option>
  
@endforeach 
     
  @endforeach  
@endif
  
</select>
    </div>
    

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
