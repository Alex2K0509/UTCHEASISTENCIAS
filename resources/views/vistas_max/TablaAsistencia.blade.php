<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registro de asistencias</title>
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
            height: 2.2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 17px;
        }

        img {
          position: fixed;
          top: 15px;
          left: 20px;
          right: 30px;
        }



    </style>
</head>
<body>
    <header>
        <br>
        <p><strong><img src="data:image/png;base64,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" height="50">FINGER PRINT ASSISTANCE SYSTEM</strong></p>
    </header>
    <main>
            <h5 style="text-align: center"><strong>REGISTRO DE ASISTENCIAS</strong></h5>
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

                      @foreach ($asignaturas as $Materia)

 <td> {{$Materia->nombre_materia}} </td>
@endforeach

                      </td>
                    </tr>

                    @endforeach
                </tbody>



              </table>
          </div>
    </main>
    <footer>
        @foreach ($asignaturas as $Materia)

 <p style="color: black">Materia: {{$Materia->nombre_materia}}</p>

 <p style="color: black">Fecha: {{$now->format('d-m-Y H:i:s')}}</p>

@endforeach

    </footer>
</body>
</html>
