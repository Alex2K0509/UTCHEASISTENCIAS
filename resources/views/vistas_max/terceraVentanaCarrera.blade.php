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
<td><div contenteditable></div contenteditable></td>
<td><div contenteditable></div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> ENa}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> ENf}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> ENr}}</div contenteditable></td>   
<td><div contenteditable>{{$insertar_datos-> IOTa}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> IOTf}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> IOTr}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> DMa}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> DMf}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> DMr}}</div contenteditable></td> 
<td><div contenteditable>{{$insertar_datos-> EOYEa}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> EOYEf}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> EOYEr}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> INa}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> INf}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> INr}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> AWa}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> AWf}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> AWr}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> BDa}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> BDf}}</div contenteditable></td>
<td><div contenteditable>{{$insertar_datos-> BDr}}</div contenteditable></td>

              	                	               	
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
