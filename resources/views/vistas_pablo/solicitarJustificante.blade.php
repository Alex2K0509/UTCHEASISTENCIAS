@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <form method="POST" action={{route('contact')}}>
        @if (Session::has('message'))

            <div class="alert alert-success" >{{ Session::get('message') }}</div>
        @endif
        @csrf
        <title>Área de alumnos</title>
        <div class="container">
            <h2>Solicitar Justificación</h2>
            <div class="form-group">
                <label for="materia">Motivo de la falta:</label>
                <select class="custom-select" id="motivo"  name="motivo" required>
                   <option>Salud</option>
                    <option>Motivo Personal</option>
                    <option>Motivo academico</option>

                </select>
                
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
                <input type="text" class="form-control" id="alumno" value="{{ $email}}" name="email" disabled>
            </div>
                <input type="text" name="alumno" value="{{$nombre.' '.$apepat.' '.$apemat}}" hidden>


            <div class="form-group">
                <label for="director1">Director de carrera:</label>
                @if ($user->genericas()->count() > 0)

                    @foreach ($user->genericas as $generica)

                        @foreach ($generica->Materias2 as $Materia)

                           @foreach($Materia->carreras as $carrera)

                                <input type="text" class="form-control" value="{{$carrera->email}} " name="director" readonly >


                        @endforeach
@endforeach
                    @endforeach
                @endif
            </div>

            <button type="submit" class="btn btn-success btn-sm" >Enviar</button>
            <button type="submit" class="btn btn-info btn-sm" >Generar PDF</button>

            </div>
        </div>
    </form>

@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
