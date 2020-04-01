@extends('layouts.carrera2')

@section('title','Area de D.Carrera')


@section('content')

<section class="content">
        <div class="container">
  <h2>Generar reporte de asistencias</h2>

  <form action="{{ route('AreaCarreraTabla') }}">

 

<div class="form-group">
      
      
      
    </div>
<div class="form-group">
      <label for="grupo">Grupo:</label>
     <select name="Id_asignatura">


  @if ($user->genericas()->count() > 0)
 
  @foreach ($user->genericas as $generica)
    
  @foreach ($generica->Materias as $Materias)

  <option value="{{$Materias->Id_grupo}}">{{$Materias->Id_grupo}}</option>
  
@endforeach 
     
  @endforeach  
@endif
  
</select>
    </div>
    


    <button type="submit" class="btn-outline-success">Solicitar reporte</button>
  </form>
</div>
          <!-- /.row -->
    </section>

@endsection
@section('footer')
    @include('includes/sidebarcarrera')
    @endsection
