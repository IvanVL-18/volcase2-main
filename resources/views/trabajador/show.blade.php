@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Detalles del Trabajo</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $trabajo->trabajo }}</h5>
                <p class="card-text">{{ $trabajo->descripcion }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Fecha de Inicio:</strong> {{ $trabajo->fecha_Inicio }}</li>
                    <li class="list-group-item"><strong>Fecha de Fin:</strong> {{ $trabajo->fecha_Fin }}</li>
                    <li class="list-group-item"><strong>Comentario:</strong> {{ $trabajo->comentario }}</li>
                    <li class="list-group-item"><strong>Status:</strong> {{ $trabajo->status }}</li>
                </ul>
                <!-- Debes cambiar el comentario y el status -->
                <a href="{{ route('trabajador.edit', ['trabajador' => $trabajo->id]) }}" class="btn btn-primary mt-3">Editar</a>
                <!-- Agrega más detalles según tus necesidades -->
            </div>
        </div>
    </div>
@endsection
