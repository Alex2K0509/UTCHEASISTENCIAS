@extends('layouts.carrera2')

@section('title','Area de carrera2')


@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Alumno</th>
      <th scope="col">Ingles V</th>
      <th scope="col">Aplicaciones de IOT</th>
      <th scope="col">Desarrollo Movil Multiplataforma</th>
      <th scope="col">Expresion Oral y Escrita II</th>
      <th scope="col">Integradora</th>
      <th scope="col">Aplicaciones web para I4.0 web</th>
      <th scope="col">Base de datos para computo en la nube</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Max Hermosillo Sandoval</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Alberto Sandoval</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sandoval Alberto</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
      <td>Falta</td>
      <td>Asistencia</td>
    </tr>
  </tbody>
</table>

<center><button type="button" class="btn btn-success">Ingresarxd</button></center>



@endsection
@section('footer')
    @include('includes/footer')
    @endsection
