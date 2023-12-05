@extends('layouts.app')

@section('template_title')
    {{ $trabajo->name ?? "{{ __('Show') Trabajo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('trabajos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Trabajo:</strong>
                            {{ $trabajo->trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $trabajo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $trabajo->fecha_Inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $trabajo->fecha_Fin }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $trabajo->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $trabajo->status }}
                        </div>
                        <div class="form-group">
                            <strong>Id Trabajador:</strong>
                            {{ $trabajo->ID_Trabajador }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
