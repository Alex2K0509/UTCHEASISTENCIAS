@extends('layouts.appReporte')
@section('content')
 <div class="wrapper">


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Maestros</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Bienvenido</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Opciones</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >Generar reporte de asistencias</a>

                        </li>
                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false">Actualizar asistencias</a>

                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

         <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">

                        <span> <i class="fas fa-bars"></i></span>
                    </button>

                </div>

<div class="table-responsive">
            <table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col" colspan="5" style="text-align: center";>Nombre del maestros</th>

    </tr>
  <tr>
      <th scope="col" colspan="5" style="text-align: center";>Nombre de la carrera</th>
  </tr>


  </thead>

  <tbody>

   <tr>
      <th scope="row" style="text-align: center">Asignatura</th>
      <th scope="row" style="text-align: center">Cuatrimestre</th>
       <th scope="row" style="text-align: center">Grupo</th>
<th scope="row" style="text-align: center">Fecha de incio</th>
       <th scope="row" style="text-align: center">Fecha fin</th>
    </tr>


    <tr>
      <th scope="row">


	<input type="text" readonly value="Informatica V">


      </th>


      <td>


	<input type="text" value="5TO" readonly>




      </td>

        <td>
    <input type="text" value="TIAM5" readonly>
</td>

          <td>
    <input type="date"  readonly>
</td>

        <td>
    <input type="date"  readonly>
</td>
    </tr>


  </tbody>
</table>
     </div>
            <br>
            <h2 style="text-align: center">tabla de alumnos por periodo de fechas</h2>
            <div class="table-responsive">
                  <table class="table table-bordered" >


  <tbody>

   <tr>
      <th scope="row" style="text-align: center">#</th>
      <th scope="row" style="text-align: center">Matricula</th>
       <th scope="row" style="text-align: center">Nombre</th>
        <th scope="row">25/02/2020</th>
        <th scope="row">26/02/2020</th>
       <th scope="row">27/02/2020</th>

    </tr>


    <tr>
      <th scope="row">
      <input type="text" value="1">
      </th>


      <td>
          <input type="text" value="8118110121">

      </td>
        <td>
    <input type="text" value="Julian Alejandro Bardales May" readonly="">

</td>
        <td>
            <input type="text" value="asistencias" readonly>

        </td>
        <td>
            <input type="text" value="falta" readonly>

        </td>
        <td>
            <input type="text" value="falta" readonly>

        </td>
    </tr>
 <tr>
      <th scope="row">
      <input type="text" value="1">
      </th>


      <td>
          <input type="text" value="8118110121">

      </td>
        <td>
    <input type="text" value="Luis Eduardo Lopez Ake" readonly="" >

</td>
        <td>
            <input type="text" value="asistencias" readonly>

        </td>
        <td>
            <input type="text" value="falta" readonly>

        </td>
     <td>
            <input type="text" value="falta" readonly>

        </td>
    </tr>

  </tbody>
</table>
                </div>
        </div>









 </div>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    @endsection()
