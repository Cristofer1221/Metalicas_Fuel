@extends('adminlte::page')

@section('title', 'Fechas')

@section('content_header')
    <h1>Creación de fecha para asistencia</h1>

    <div class="form-group">
        {!! Form::open(['route'=>'admin.fechas.store', 'class'=>'row g-3']) !!}
            {!! Form::label('fecha_trabajo', 'Fecha para asistencia: ') !!}
            {!! Form::date('fecha_trabajo', null, ['class' =>'form-control' . ($errors->has('fecha_trabajo') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha para asistencia... ' ]) !!}

            <div class="d-grid gap-6 col-4 mx-auto">
                {!! Form::submit('Crear Fecha', ['class'=>'mt-4 btn btn-primary ']) !!}
            </div>

        {!! Form::close() !!}
    </div>


@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
