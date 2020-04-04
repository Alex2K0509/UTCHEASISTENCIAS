@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <form METHOD="POST" action={{route('contact')}}>
        @csrf
        <title>Área de alumnos</title>
        <div class="container">
            <h2>Solicitar Justificación</h2>
            <div class="form-group">
                <label for="materia">Motivo de la falta:</label>
                <textarea class="form-control" id="motivo"  name="motivo" required></textarea>
            </div>
            <div class="form-group">
                <label for="justificante">Justificante:</label>
                <br>
                <input type="file"  id="justificante" name="justificante">
            </div>
            <div class="form-group">
                <label for="date2">Día:</label>
                <input type="date" class="form-control" id="date2"  name="date2"  required>
            </div>
            <div class="form-group">
                <label for="director">Enviado por:</label>
                <input type="text" class="form-control" id="alumno" value="{{$user->email}}" name="alumno" disabled>
            </div>

            <div class="form-group">
                <label for="director">Director de carrera:</label>
                @if ($user->genericas()->count() > 0)

                    @foreach ($user->genericas as $generica)

                        @foreach ($generica->Materias2 as $Materia)

                           @foreach($Materia->carreras as $carrera)
                                <input type="text" class="form-control" id="director" placeholder="{{$carrera->Nombre.' '.$carrera->ApePat.' '.$carrera->ApeMat}}" value="{{$carrera->email}}" name="director" disabled>
                        @endforeach
@endforeach
                    @endforeach
                @endif
            </div>
            <!-- Trigger the modal with a button -->
            <button type="submit" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Enviar</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Correo enviado</h4>
                        </div>
                        <div class="modal-body">
                            <p>Su correo ha sido enviado.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
