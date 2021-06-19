@extends('adminlte::page')

@section('title', 'Editar Fechas')

@section('content_header')
    <h1>Edición de fechas de trabajo</h1>

    <div class="card">
        @if (session('info'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
            </div>
        @endif
        <div class="card-body">
            {!! Form::model($fecha,['route'=> ['admin.fechas.update',$fecha],'class'=>'row g-3','method'=>'put']) !!}

                {!! Form::label('fecha_trabajo', 'Edición de fecha: ') !!}
                {!! Form::date('fecha_trabajo', null, ['class' =>'form-control' . ($errors->has('fecha_trabajo') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha para asistencia... ' ]) !!}

                <div class="d-grid gap-6 col-4 mx-auto">
                    {!! Form::submit('Editar Fecha', ['class'=>'btn btn-primary mt-2']) !!}
                </div>

             {!! Form::close() !!}
        </div>
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
