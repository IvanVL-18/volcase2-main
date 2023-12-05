<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('trabajo') }}
            {{ Form::text('trabajo', $trabajo->trabajo, ['class' => 'form-control' . ($errors->has('trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Trabajo']) }}
            {!! $errors->first('trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $trabajo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_Inicio') }}
            {{ Form::text('fecha_Inicio', $trabajo->fecha_Inicio, ['class' => 'form-control' . ($errors->has('fecha_Inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_Inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_Fin') }}
            {{ Form::text('fecha_Fin', $trabajo->fecha_Fin, ['class' => 'form-control' . ($errors->has('fecha_Fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_Fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentario') }}
            {{ Form::text('comentario', $trabajo->comentario, ['class' => 'form-control' . ($errors->has('comentario') ? ' is-invalid' : ''), 'placeholder' => 'Comentario']) }}
            {!! $errors->first('comentario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $trabajo->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_Trabajador') }}
            {{ Form::text('ID_Trabajador', $trabajo->ID_Trabajador, ['class' => 'form-control' . ($errors->has('ID_Trabajador') ? ' is-invalid' : ''), 'placeholder' => 'Id Trabajador']) }}
            {!! $errors->first('ID_Trabajador', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>