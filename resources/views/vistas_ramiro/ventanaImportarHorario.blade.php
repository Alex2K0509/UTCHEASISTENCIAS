@extends('layouts.layoutRamiro')

@section('title','Area de Admin')
@section('content')

          <section class="content">
        <div class="container">
 
<center><h2>Importar Archivo CSV</h2></center>
  <form action="{{ route('HorariosImportados') }}">
<fieldset>
    <legend>Importar CSV para Horarios</legend>
    <?php if (!empty($message_import)) echo $message_import; ?>
    <form enctype="multipart/form-data" method="POST" action="index.php">
        <label>Selecciona un archivo .csv </label><br>
        <input class="btn-outline-success" style="float: left" type="file" name="file" class=""><br><br>
        <input class="btn-outline-success" style="float: left" type="submit" value="Subir" name="submitFileUpload">

    </form>
  </form>
</div>
</section>
</fieldset>

@endsection()

@section('sidebaradmin')
    @include('includes/sidebarRamiro')
    @endsection
