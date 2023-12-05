@extends('layouts.app')

@section('template_title')
    {{ $calendario->name ?? "{{ __('Show') Calendario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Calendario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calendarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Trabajador:</strong>
                            {{ $calendario->ID_Trabajador }}
                        </div>
                        <div class="form-group">
                            <strong>Id Trabajo:</strong>
                            {{ $calendario->ID_Trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $calendario->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Entrada:</strong>
                            {{ $calendario->hora_Entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Salida:</strong>
                            {{ $calendario->hora_Salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
