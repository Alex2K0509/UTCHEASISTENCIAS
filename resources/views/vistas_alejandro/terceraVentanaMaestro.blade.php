@extends('layouts.appReporte')

@section('title','Area de maestros')

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
                             <a  href="{{ route('AreaMaestroReporte') }}" >Generar reporte de asistencias</a>

                        </li>
                        <li>
                             <a   href="{{ route('AreaMaestrosAsistencia') }}" aria-expanded="false">Actualizar asistencias</a>

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


            <div class="contenedor">
                <div class="post">
                    <form class="formulario">
                        <div class="table-responsive">
<table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col" colspan="4" style="text-align: center";>Nombre del maestros</th>

    </tr>
  <tr>
      <th scope="col" colspan="4" style="text-align: center";>capturar asistencias</th>
  </tr>


  </thead>

  <tbody>

   <tr>
      <th scope="row" style="text-align: center">Materia</th>
      <th scope="row" style="text-align: center">Grupo</th>
       <th scope="row" style="text-align: center">Fecha</th>

    </tr>


    <tr>
      <th scope="row">
      <select readonly="true">

	<option readonly="true">Informatica </option>

      </select>
      </th>


      <td>
          <select readonly="true">

	<option> TIAM5  </option>


</select>

      </td>
        <td>
    <input type="date">

</td>
    </tr>


  </tbody>
</table>
                        </div>


                        <br>
<div class="table-responsive">
                        <table class="table table-bordered" >


  <tbody>

   <tr>
      <th scope="row" style="text-align: center">#</th>
      <th scope="row" style="text-align: center">Matricula</th>
       <th scope="row" style="text-align: center">Nombre</th>
<th scope="row">Asitencia/falta</th>
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
            <select>
                <option>Asitencia</option>
                <option>Falta</option>
            </select>

        </td>
    </tr>


  </tbody>
</table>
     </div>
                        <input type="submit" value="Grabar día" style="float: right" class="btn-outline-success">
</form>

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
 </div>

    @endsection

@section('footer')

    @include('includes/footer')

@endsection
