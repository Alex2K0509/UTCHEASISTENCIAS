@extends('layouts.layoutsTablas')
@section('title','Area de Alumnos')
@section('content')
    <title>Area de alumnos</title>
    <div class="container">
        <h2>Vizualizar asistencia</h2>
            <div class="form-group">
                <label for="materia">Materia:</label>
                <select id="materia" class="custom-select">
                    <option>Inglés V</option>
                    <option>EOYE II</option>
                    <option>IOT</option>
                    <option>Desarrollo movil</option>



                </select>
            </div>
            <div class="form-group">
                <label for="date3">Día</label>
                <input type="date" class="form-control" id="date3"  name="date3">
            </div>


            <div class="float-right">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal">Solicitar</button>
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
                    <p>El dia seleccionado es: 2/03/2020</p>
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
    </div>
@endsection
@section('sidebar')
    @include('includes.slider')
@endsection
