@extends('layouts.layoutRamiro')

@section('title','Area de Admin')
@section('content')

          <section class="content">
        <div class="container">
          
  <center><h2>Importar Archivo CSV</h2></center>

  <form method="POST" action="{{ route('carrerasImportadas') }}" enctype="multipart/form-data">

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar archivo para Carrera</div>
        <div class="panel-body">
          
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
              <label class="col-md-4 control-label">Nuevo Archivo</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
    </form>
          </section>
    @if (Session::has('message'))

    <div class="alert alert-success" >{{ Session::get('message') }}</div>

@endif
@csrf
          </section>
@endsection()

@section('sidebaradmin')
    @include('includes/sidebarRamiro')
    @endsection
