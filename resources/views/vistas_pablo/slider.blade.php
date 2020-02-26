@method('PUT')
@csrf
@extends('layouts.app3')

@section('title','area de alumnos')

@section('sidebar')

    <div class="wrapper">


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Alumnos</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Bienvenido</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Alumno</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a  data-toggle="collapse" href="#" aria-expanded="false" >Solicitar justificante</a>

                        </li>
                        <li>
                            <a  data-toggle="collapse" href="#" aria-expanded="false">Vizualizar cantidad de asistencias</a>

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
