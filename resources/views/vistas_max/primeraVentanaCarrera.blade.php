@extends('layouts.carrera1')

@section('title','Area de carrera')


@section('content')

    <div class="wrapper">


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Director de carrera</h3>
            </div>

            <ul class="list-unstyled components">
              
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Carrera</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >TI</a>

                        </li>
                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false">Gastronomia</a>

                        </li>

                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >Mecatronica</a>

                        </li>

                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >Desarrollo empresarial</a>

                        </li>

                    </ul>

                </li>

            </ul>

            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Grupo</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >TIAM18</a>

                        </li>
                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false">GAS18</a>

                        </li>

                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >DN18</a>

                        </li>

                        <li>
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >MECOS18</a>

                        </li>

                    </ul>

                </li>

            </ul>
				<button type="button" class="btn btn-secondary">Ingresar xd</button>


        </nav>



        <!-- Page Content  -->
        <div id="content">

        	<center><h1>Universidad Tecnologica de Chetumal</h1></center>

         <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">

                        <span> <i class="fas fa-bars"></i></span>
                    </button>


                </div>




        </div>
    </div>



@endsection
@section('footer')
    @include('includes/footer')
    @endsection




