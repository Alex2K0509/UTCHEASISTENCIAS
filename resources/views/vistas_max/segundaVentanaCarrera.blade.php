@extends('layouts.carrera2')

@section('title','Area de carrera2')


@section('content')

<div id="content">

			<center><h1>Concentrado de asistencias</h1></center>
        	<center><h2>Carrera: TSU - TECNOLOGIAS DE LA INFORMACION</h2></center>
        	<center><h3>Grado-Grupo: 5TIAM</h3></center>
        	
        	

         <div class="container-fluid">

                    

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
      <td>A:1 F:2 R:0</td>
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
                </div>




        </div>

@endsection
@section('footer')
    @include('includes/footer')
    @endsection
