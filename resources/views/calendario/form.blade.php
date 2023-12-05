<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID_Trabajador') }}
            {{ Form::text('ID_Trabajador', $calendario->ID_Trabajador, ['class' => 'form-control' . ($errors->has('ID_Trabajador') ? ' is-invalid' : ''), 'placeholder' => 'Id Trabajador']) }}
            {!! $errors->first('ID_Trabajador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_Trabajo') }}
            {{ Form::text('ID_Trabajo', $calendario->ID_Trabajo, ['class' => 'form-control' . ($errors->has('ID_Trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Id Trabajo']) }}
            {!! $errors->first('ID_Trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $calendario->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_Entrada') }}
            {{ Form::text('hora_Entrada', $calendario->hora_Entrada, ['class' => 'form-control' . ($errors->has('hora_Entrada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrada']) }}
            {!! $errors->first('hora_Entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_Salida') }}
            {{ Form::text('hora_Salida', $calendario->hora_Salida, ['class' => 'form-control' . ($errors->has('hora_Salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida']) }}
            {!! $errors->first('hora_Salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>