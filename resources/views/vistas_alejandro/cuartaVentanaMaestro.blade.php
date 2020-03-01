@extends('layouts.appReporte')
@section('title','Area de maestros')
@section('content')
     <div class="wrapper">


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Administradores</h3>
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


<div class="container">
  <h2>Generar reporte por periodos de fechas</h2>
  <form action="{{ route('AreaMaestroReporteListo') }}">
<div class="form-group">
      <label for="materia">Materia:</label>
      <select id="materia" class="custom-select">
          <option>INFORMATICA</option>
      </select>
    </div>
<div class="form-group">
      <label for="grupo">Materia:</label>
      <select id="grupo" class="custom-select">
          <option>TIAM5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="date1">Fecha inicial:</label>
      <input type="date" class="form-control" id="date1"  name="date1">
    </div>
    <div class="form-group">
      <label for="date2">Fecha final:</label>
      <input type="date" class="form-control" id="date2"  name="date2">
    </div>


    <button type="submit"  class="btn-outline-success">Solicitar reporte</button>
  </form>
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

@endsection()
@section('footer')
     @include('includes/footer')
    @endsection
