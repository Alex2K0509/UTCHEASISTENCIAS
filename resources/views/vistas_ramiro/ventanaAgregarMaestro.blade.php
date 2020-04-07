@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel Excel 3.1</div>

                <div class="card-body">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        Validacion de Importacion<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="import_file">
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        <input type="submit" value="Import" class="btn btn-danger btn-sm">
                    </form>
                    </br>
                    </hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center">No Existen Usuarios</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    label {
        display: inline-block;
        width: 80px;
    }
</style>
@endsection