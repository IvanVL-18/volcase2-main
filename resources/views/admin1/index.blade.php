@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Usuarios</h1>

        @if ($usuarios->count() > 0)
            <ul class="list-group">
                @foreach ($usuarios as $usuario)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>{{ $usuario->name }}</span>
                            <span>{{ $usuario->email }}</span>
                        </div>
                    </li>
                    <!-- Puedes mostrar más detalles según tus necesidades -->
                @endforeach
            </ul>
        @else
            <p>No hay usuarios registrados.</p>
        @endif
    </div>
@endsection