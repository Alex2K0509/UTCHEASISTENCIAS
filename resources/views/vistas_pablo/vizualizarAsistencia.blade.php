@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <?php


    ?>
    <title>Area de alumnos</title>
    <form action="{{route('AlumnosVisualizar')}}" >
        <div class="container">
            <h2>Visualizar asistencia</h2>
<<<<<<< Updated upstream
=======

            <div class="form-group">
                <label for="materia">Materia:</label>
                <select id="materia" class="custom-select" name="materia">
                    {{---el if es para ver si hay una relacion entree usuarios y generica, puede ser coun-exist---}}
                    @if ($user->genericas()->count() > 0)
                        {{---en este primer forech nos da sus genericas ---}}
                        @foreach ($user->genericas as $generica)
                            {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}
                            @foreach ($generica->Materias as $Materias)


                                <option value="{{$Materias->Id_Asignatura}}">{{$Materias->nombre_materia}}</option>
                            @endforeach


                        @endforeach
                    @endif

                </select>
            </div>


            <div class="form-group">
                <label for="grupo">Grupo:</label>
                <select id="grupo" class="custom-select" name="grupo" disabled>
                    {{---el if es para ver si hay una relacion entree usuarios y generica, puede ser coun-exist---}}
                    @if ($user->genericas()->count() > 0)
                        {{---en este primer forech nos da sus genericas ---}}
                        @foreach ($user->Genericas as $genericas)
                            {{---en este segundo foreach nos esta dando las asignaturas que tiene ---}}
                            <option value="{{$genericas->Id_grupo}}">
                                {{$genericas->Id_grupo}}
                            </option>


                        @endforeach
                    @endif

                </select>




>>>>>>> Stashed changes
            <div class="form-group">
                <label for="date3">Fecha Inicial</label>
                <input type="date" class="form-control" id="fecha1"  name="fecha1" required>
            </div>


            <div class="form-group">
                <label for="datea">Fecha Final</label>
                <input type="date" class="form-control" id="fecha2"  name="fecha2" required>
            </div>

            <input type="submit" class="btn-outline-success" style="float: right" value="Solicitar asistencias">

        </div>
    </form>

@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
