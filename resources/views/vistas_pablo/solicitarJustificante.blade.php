
@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    {{--Formulario para solicitar justificacion--}}
    <form method="POST" action={{route('contact')}}>
        @if (Session::has('message'))
            {{--Alert para confirmar el envio del correo electronico--}}
            <div class="alert alert-success" >{{ Session::get('message') }}</div>

        @endif
        @csrf{{--Esta etiqueta nos ayuda a proteger de los ataques CSRF--}}
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
                <input type="text" class="form-control"name="correo"  value="{{ $email}}"  readonly>
            </div>
            {{-- Se usa la informacion del alumno que redacto el correo --}}
            <input type="text" name="alumno" value="{{$nombre.' '.$apepat.' '.$apemat}}" hidden>


            <div class="form-group">
                <label for="director1">Director de carrera:</label>
                {{---El if  es para ver si hay una relacion entre la coleccion usuarios y la coleccion generica, puede ser un count exist --}}
                @if ($user->genericas()->count() > 0)

                    @foreach ($user->genericas as $generica)

                        @foreach ($generica->Materias2 as $Materia)

                            @foreach($Materia->carreras as $carrera)
                                {{--Los foreachs anteriores son para relacionar el usuario con una carrera para obtener el correo del director--}}

                                <input type="text" class="form-control" value="{{$carrera->email}} " name="director" readonly >


                        @endforeach
@endforeach
                    @endforeach
                @endif
            </div>

            <button type="submit" class="btn btn-info btn-sm" >Enviar</button>

            </div>
        </div>
    </form>

@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
