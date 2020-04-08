@method('PUT')
@csrf
@extends('layouts.layoutRamiro')



@section('sidebarRamiro')

    <title>Area de Adminww</title>
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
                            <a  data-toggle="collapse" href="{{ route('HorariosImportados') }}" aria-expanded="false" >Importar Horarios</a>

                        </li>
                        <li>
                            <a  data-toggle="collapse" href="{{ route('MateriasImportadas') }}" aria-expanded="false">Importar Materias</a>

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

        @extends('layouts.layoutRamiro')
        @section('sidebar')
             <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #118740; color: #000000">
                <!-- Brand Logo -->
                <a href="{{ route('Principal') }}" class="brand-link">
                    <i class="fas fa-user-graduate"></i>
                    <span class="brand-text font-weight-light">Administradores</span>
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
                                        <a href="{{ route('getHorariosImportados') }}" class="nav-link active">

                                            <p>Importar Horarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('getMateriasImportadas') }}" class="nav-link active">

                                            <p>Importar Materias</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('getMaestrosImportados') }}" class="nav-link active">

                                            <p>Importar Maestro</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('getAlumnosImportados') }}" class="nav-link active">

                                            <p>Importar Alumnos</p>
                                        </a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a href="{{ route('generica') }}" class="nav-link active">

                                            <p>Importar Genericas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('carrera') }}" class="nav-link active">

                                            <p>Importar Carreras</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Administrador') }}" class="nav-link active">

                                            <p>Importar Administrador</p>
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
