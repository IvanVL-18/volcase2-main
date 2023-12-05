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
                    <h4 class="text-white">Hola {{ $usuario->name }}</h4>
                </li>
                <li class="list-group-item">
                    <!-- Enlace en la vista -->
<a href="{{ url('admin/edit', ['id' => $usuario->id]) }}" class="btn btn-secondary">Actualizar datos</a>

                </li>
                <li class="list-group-item">
                    <strong>Correo electrónico:</strong>  {{ $usuario->email }} 
                </li>
                <li class="list-group-item">
                    <strong>Contraseña:</strong> ***********
                </li>
                <li class="list-group-item">
                    <strong>Rol:</strong> {{ $usuario->Tipo }}
                </li>
                <li class="list-group-item">
                    <details>
                        <summary>Borrar cuenta</summary>
                        <center>
                            
                            <form action="{{ route('admin.destroy',$usuario->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                            </form>
                        </center>
                    </details>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
