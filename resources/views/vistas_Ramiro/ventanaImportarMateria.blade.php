@extends('layouts.layoutsAdmin')
@section('title','Area de Admin')
@section('content')
<section class="content">
        <div class="container">
  <h2>Importar Archivo CSV</h2>

  <form action="{{ route('ImportarMateria') }}">
<fieldset>
    <legend>Importar CSV para Materias</legend>
    <?php if (!empty($message_import)) echo $message_import; ?>
    <form enctype="multipart/form-data" method="POST" action="index.php">
        <label>Selecciona un archivo .csv </label>
        <input type="file" name="file">
        <input type="submit" value="Upload" name="submitFileUpload">
    </form>
  </form>
</div>
</section>
</fieldset>
    @endsection
@section('sidebaradmin')
    @include('includes.sidebaradmin')
    @endsection
