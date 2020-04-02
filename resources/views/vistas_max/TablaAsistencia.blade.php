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
              
              <table id="responsive" class="table table-bordered table-striped">
                <thead>
                <tr>
                <td style="text-align: center;">Matricula</td>
                <td style="text-align: center;">Alumno</td>
                <td style="text-align: center;">Fecha</td>
                <td style="text-align: center;">Asistencias</td>
                <td style="text-align: center;">Grupo</td>
                <td style="text-align: center;">Materia</td>
              </tr>
            </thead>
            <tbody>
            @foreach ($asistencias as $asistencia)
                    <tr>
                      <td>{{$asistencia->genericas->alumno2->matricula}}</td>
                      <td>{{$asistencia->genericas->alumno2->name.' '.$asistencia->genericas->alumno2->ApePat.' '.$asistencia->genericas->alumno2->ApeMat}}</td>
                      <td>{{ $asistencia->fecha }}</td>
                      <td>{{ $asistencia->estado }} </td>
                      <td>{{ $asistencia->Id_grupo }} </td>
                      
                      @if ($user->genericas()->count() > 0)
 
  @foreach ($user->genericas as $generica)
 
  @foreach ($generica->Materias as $Materias)
  
 <td> {{$Materias->nombre_materia}} </td>
@endforeach  
     
  @endforeach  
@endif
                      
                      </td>
                    </tr>
                    
                    @endforeach
                </tbody>



              </table>
          </div>
    </main>
    <footer>
        <p><strong>CREADO POR: APRM</strong></p>
    </footer>
</body>
</html>