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
            	
                <p>Carrera</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Opciones</a>
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
                             <a  data-toggle="collapse" href="#" aria-expanded="false" >Desarrollo</a>

                        </li>



                    </ul>
                </li>

            </ul>
        </nav>

        

            

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

         <div class="container-fluid">

                    

                </div>


        </div>
    </div>



@endsection
@section('footer')
    @include('includes/footer')
    @endsection




