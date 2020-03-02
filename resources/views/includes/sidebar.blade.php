

@extends('layouts.layout')
@section('sidebar')
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #118740; color: #000000">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="{{ asset('/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                                   style="opacity: .8"> --}}
                               <i class="fas fa-chalkboard-teacher">     </i> 
      <span class="brand-text font-weight-light">  Área de maestros</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" >

        <div class="info" >
          <a href="#" class="d-block" style="color: #000000">"nombre del maestro"</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open" c>
            <a href="#" class="nav-link ">

              <p>
                Opciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('AreaMaestroReporte')}}" class="nav-link active">

                  <p>Generar reporte de asistencias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('AreaMaestrosAsistencia')}}" class="nav-link active">

                  <p>Actualizar asistencias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">

                  <p>Cerrar sesión</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endsection()

