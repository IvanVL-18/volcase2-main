@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <ul class="list-group">
                <li class="list-group-item active text-center">
                    <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="Avatar" class="img-fluid rounded-circle mb-3 avatar-img ">
                    <h4 class="text-white">Administrador</h4>
                </li>
                <li class="list-group-item">
                    <a href="{{url('/editprofile')}}" class="btn btn-info">Actualizar datos</a>
                </li>
                <li class="list-group-item">
                    <strong>Nombre:</strong> Cris
                </li>
                <li class="list-group-item">
                    <strong>Apellido paterno:</strong> Cris Cruz
                </li>
                <li class="list-group-item">
                    <strong>Apellido materno:</strong> Cris Garcia
                </li>
                <li class="list-group-item">
                    <strong>Correo electrónico:</strong> admin@example.com
                </li>
                <li class="list-group-item">
                    <strong>Contraseña:</strong> ***********
                </li>
                <li class="list-group-item">
                    <strong>Fecha de Nacimiento:</strong> 01/01/1990
                </li>
                <li class="list-group-item">
                    <details>
                        <summary>Borrar cuenta</summary>
                        <center>
                            <button type="button" class="btn btn-danger">Borrar cuenta</button>
                        </center>
                    </details>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
