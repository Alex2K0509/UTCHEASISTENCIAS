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
                <form action="{{ route('GenerarPDF') }}">
              <table id="responsive" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Alumno</th>
                  <th colspan="3">Ingles</th>
                  <th colspan="3">Aplicaciones IOT</th>
                  <th colspan="3">Desarrollo movil</th>
                  <th colspan="3">Expresion oral y escrita</th>
                  <th colspan="3">Integradora</th>
                  <th colspan="3">Aplicaciones web</th>
                  <th colspan="3">Base de datos </th>
                </tr>
                </thead>
                <tbody>
                @foreach($insertar_datoos as $insertar_datos)
                <tr>
                  <td colspan="">1</td>
                  <td>{{$insertar_datos-> alumno}}</td>
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
<td>{{$insertar_datos-> ENa}}</td>
<td>{{$insertar_datos-> ENf}}</td>
<td>{{$insertar_datos-> ENr}}</td>  
<td>{{$insertar_datos-> IOTa}}</td>
<td>{{$insertar_datos-> IOTf}}</td>
<td>{{$insertar_datos-> IOTr}}</td>
<td>{{$insertar_datos-> DMa}}</td>
<td>{{$insertar_datos-> DMf}}</td>
<td>{{$insertar_datos-> DMr}}</td> 
<td>{{$insertar_datos-> EOYEa}}</td>
<td>{{$insertar_datos-> EOYEf}}</td>
<td>{{$insertar_datos-> EOYEr}}</td>
<td>{{$insertar_datos-> INa}}</td>
<td>{{$insertar_datos-> INf}}</td>
<td>{{$insertar_datos-> INr}}</td>
<td>{{$insertar_datos-> AWa}}</td>
<td>{{$insertar_datos-> AWf}}</td>
<td>{{$insertar_datos-> AWr}}</td>
<td>{{$insertar_datos-> BDa}}</td>
<td>{{$insertar_datos-> BDf}}</td>
<td>{{$insertar_datos-> BDr}}</td>

              	                	               	
                </tr>

                
                </tbody>
                @endforeach
              </table>
                <input type="submit" class="btn-outline-success" value="Generar PDF" style="float:right;">
                <form action="">
                  
                </form>
                </form>
            </div>
            <!-- /.card-body -->
          </div>

@endsection
@section('footer')
    @include('includes/sidebarcarrera')
    @endsection
