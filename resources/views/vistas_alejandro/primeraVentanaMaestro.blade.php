@extends('layouts.layout')

@section('title','Area de Maestros')


@section('content')


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Administradores</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Acciones</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse"  class="dropdown-toggle">Importar datos</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                             <a  href="{{ route('AreaMaestroReporte') }}" >Asignaturas</a>

                        </li>
                        <li>
                             <a   href="{{ route('AreaMaestrosAsistencia') }}" aria-expanded="false">Horarios</a>

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
    </div>


@endsection
@section('footer')
    @include('includes/sidebar')
    @endsection
