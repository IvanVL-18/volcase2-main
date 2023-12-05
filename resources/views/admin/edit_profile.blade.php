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
            </ul>
                <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                      <label for="nombre">Nombre</label>
                      <input type="nombre" class="form-control" id="email" placeholder="nombre" name="nombre">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="nombre">Apellido paterno</label>
                        <input type="nombre" class="form-control" id="email" placeholder="Apellido paterno" name="nombre">
                      </div>

                      <div class="mb-3 mt-3">
                        <label for="nombre">Apellido materno</label>
                        <input type="nombre" class="form-control" id="email" placeholder="Apellido materno" name="nombre">
                      </div>
                      <div class="mb-3 mt-3">
                        <label for="nombre">Correo</label>
                        <input type="nombre" class="form-control" id="email" placeholder="Correo" name="nombre">
                      </div>

                    <div class="mb-3">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    
                    <center>
                        <a href="{{url('/administrador/profile')}}" class="btn btn-success">Guardar</a>
                    </center>
                </li>
            
        </div>
    </div>
</div>
@endsection
