@method('PUT')
@csrf
@extends('layouts.app3')



@section('slidebar')

    <title>Area de alumnosww</title>
    <div class="wrapper">


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Alumnos</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Bienvenido</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Opciones</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a  data-toggle="collapse" href="{{ route('AlumnosJustificaciones') }}" aria-expanded="false" >Solicitar justificante</a>

                        </li>
                        <li>
                            <a  data-toggle="collapse" href="{{ route('AlumnosAsistencia') }}" aria-expanded="false">Vizualizar cantidad de asistencias</a>

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


        </div>




        @endsection

        @extends('layouts.layout')
        @section('sidebar')
             <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #118740; color: #000000">
                <!-- Brand Logo -->
                <a href="{{ route('AlumnosJustificaciones') }}" class="brand-link">
                    <i class="fas fa-user-graduate"></i>
                    <span class="brand-text font-weight-light">Área de Alumnos</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link ">

                                    <p>
                                        Opciones
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('AlumnosJustificaciones') }}" class="nav-link active">

                                            <p>Solicitar justificante</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('AlumnosAsistencia') }}" class="nav-link active">

                                            <p>Visualizar asistencias</p>
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
