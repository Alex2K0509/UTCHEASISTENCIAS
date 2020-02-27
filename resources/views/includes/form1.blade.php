@method('PUT')
@csrf
@extends('layouts.app3')
@include('includes.footer')
@section('title','area de alumnos')

@section('container')

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
                            <a  data-toggle="collapse" href="#" aria-expanded="false">Vizualizar asistencias</a>

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
                    <di action="#">
                        <div class="form-group">
                            <label for=fecha>Dia:</label>
                            <input type="date">
                        </div>
                        <div class="form-group">
                            <label for=Director>Materia:</label>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Seleccione una materia
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ingles V</a>
                                    <a class="dropdown-item" href="#">EOYE II</a>
                                    <a class="dropdown-item" href="#">IOT</a>
                                    <a class="dropdown-item" href="#">Desarrollo Movil</a>
                                </div>
                            </div>

                        </div>
                        <div class="float-right">
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Solicitar</button>
                </div>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">    Reporte de asistencias</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Asistencias totales: 4</p>
                                        <p>Faltas totales: 2</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>


@endsection
