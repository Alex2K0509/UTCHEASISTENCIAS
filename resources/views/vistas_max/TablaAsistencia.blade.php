<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE ASISTENCIAS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {

            margin: 3cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <p><strong>FINGER PRINT ASSISTANCE SYSTEM</strong></p>
    </header>
    <main>
            <h5 style="text-align: center"><strong>TABLA DE ASISTENCIAS</strong></h5>
              <div class="mx-auto">
              <table id="responsive" class="table table-sm table-striped table-bordered">
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
          </div>
    </main>
    <footer>
        <p><strong>CREADO POR: APRM</strong></p>
    </footer>
</body>
</html>