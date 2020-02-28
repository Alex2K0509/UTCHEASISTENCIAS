@extends('layouts.app3')

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
                    <form class="formulario" action="{{ route('AreaMaestroActualizar') }}">
                        <div class="table-responsive">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" colspan="4" style="text-align: center";>Nombre del maestro</th>

    </tr>
  <tr>
      <th scope="col" colspan="4" style="text-align: center";>capturar asistencias</th>
  </tr>


  </thead>

  <tbody>

   <tr>
      <th scope="row">Materia</th>
      <th scope="row">Grupo</th>
       <th scope="row">Fecha</th>

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
                            </div>
                        <input type="submit" value="solicitar asisitencias" style="float: right">
</form>

                </div>
            </div>




        </div>

    </div>



@endsection
@section('footer')
    @include('includes/footer')
    @endsection









