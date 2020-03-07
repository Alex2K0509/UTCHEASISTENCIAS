@extends('layouts.carrera2')

@section('title','Area de D.Carrera')


@section('content')

<div class="card">
            <div class="card-header">
              <h3 class="card-title" style="float:top">Concentrado de asistencias</h3>

            </div>
 <div class="card-header">
              <h3 class="card-title" style="text-align: center">Carrera: TSU-TECNOLOGIAS DE LA INFORMACION</h3>

            </div>
            <div class="card-header">
              <h3 class="card-title" style="text-align: center">GRADO-GRUPO: 5TO-TIAM</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x:auto;">
                <form action="">
              <table id="responsive" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Alumno</th>
                  <th colspan="3">Ingles</th>
                  <th colspan="3">Aplicaciones IOT</th>
                  <th colspan="3">Desarrollo movil</th>
                  <th colspan="3">Expresion oral y escrita II</th>
                  <th colspan="3">Integradora</th>
                  <th colspan="3">Aplicaciones web</th>
                  <th colspan="3">Base de datos para computo en la nube</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                  <td colspan="">1</td>
                  <td>Alejandro Yosmar Landaverde Vergara</td>
                  <td>A</td>
                  <td>F</td>
                  <td>R</td>
                  <td>A</td>
                  <td>F</td>
                  <td>R</td>
                  <td>A</td>
                  <td>F</td>
                  <td>R</td>                                    
                  <td>A</td>
                  <td>F</td>
                  <td>R</td>
                  <td>A</td>
                  <td>F</td>
                  <td>R</td>
                  <td>A</td>
                  <td>F</td>
                  <td>R</td>
                  <td>A</td>
                  <td>F</td>
                  <td>R</td>                                    
                </tr>

                <tr>
                	<td></td>
                	<td></td>
                	<td>1</td>
                	<td>10</td>
                	<td>2</td>
                 	<td>1</td>
                	<td>10</td>
                	<td>4</td>
                	<td>1</td>
                	<td>1</td>
                	<td>2</td>
                	<td>3</td>
                	<td>12</td>
                	<td>3</td>
                	<td>14</td>
                	<td>1</td>
                	<td>3</td>
                	<td>4</td>
                	<td>5</td>
                	<td>3</td>
                	<td>1</td>
                	<td>0</td>
                	<td>3</td>                	                	               	
                </tr>


                </tbody>

              </table>
                <input type="submit" class="btn-outline-success" value="Enviar" style="float:right;">
                </form>
            </div>
            <!-- /.card-body -->
          </div>

@endsection
@section('footer')
    @include('includes/sidebarcarrera')
    @endsection
