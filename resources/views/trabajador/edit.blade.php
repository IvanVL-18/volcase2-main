@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Editar Trabajo</h1>

        <form action="{{ route('trabajador.update', ['trabajador' => $trabajo->id]) }}" method="POST" class="needs-validation" novalidate>
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario:</label>
                <input type="text" id="comentario" name="comentario" value="{{ $trabajo->comentario }}" class="form-control" required>
                <div class="invalid-feedback">Por favor, ingresa un comentario.</div>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado:</label>
                <select id="status" name="status" class="form-select" required>
                    <option value="Asignada" {{ $trabajo->status === 'Asignada' ? 'selected' : '' }}>Asignada</option>
                    <option value="Completada" {{ $trabajo->status === 'Completada' ? 'selected' : '' }}>Completada</option>
                </select>
                <div class="invalid-feedback">Por favor, selecciona un estado.</div>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Trabajo</button>
        </form>
    </div>

    <script>
        // Asegúrate de validar el formulario en el lado del cliente.
        (function () {
            'use strict';

            // Recoge todos los formularios que necesitan validación de Bootstrap.
            var forms = document.querySelectorAll('.needs-validation');

            // Bucle sobre ellos y evita el envío.
            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
@endsection
