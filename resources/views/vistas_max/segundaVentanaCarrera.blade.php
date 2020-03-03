@extends('layouts.carrera2')

@section('title','Area de D.Carrera')


@section('content')

<section class="content">
        <div class="container">
  <h2>Generar reporte de asistencias</h2>
<<<<<<< HEAD
  <form action="{{ route('TablaAsistenciasDirector') }}">
=======
  <form action="{{route('AreaCarreraTabla')}}">
>>>>>>> 34e821193dc6989428402b28f8da0f548d3b0436
<div class="form-group">
      <label for="materia">Carrera:</label>
      <select id="materia" class="custom-select">
          <option>TI</option>
      </select>
    </div>
<div class="form-group">
      <label for="grupo">Grupo:</label>
      <select id="grupo" class="custom-select">
          <option>TIAM5</option>
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
