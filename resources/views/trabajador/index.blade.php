@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Trabajos Asignados</h1>

        @foreach ($trabajosAsignados as $trabajo)
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="card-title">{{ $trabajo->trabajo }}</h1>
                    <p class="card-text">{{ $trabajo->descripcion }}</p>
                    <a href="{{ route('trabajador.show', ['id' => $trabajo->id]) }}" class="btn btn-primary">Ver Detalles</a>
                    <!-- Agrega más detalles según sea necesario -->
                </div>
            </div>
        @endforeach
    </div>
@endsection
