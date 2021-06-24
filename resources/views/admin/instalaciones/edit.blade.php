@extends('adminlte::page')

@section('title', 'Editar Instalaciones')

@section('content_header')
    <h1>Eso es editar Instalaciones we</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
        </div>
    @endif

    <div class="card-content">
        {!! Form::model($instalacione,['route'=> ['admin.instalaciones.update',$instalacione],'class'=>'row g-3','method'=>'PUT']) !!}
            <div class="col-md-6">
                <br>
                <label for="">Seleccione a un Trabajor:</label>
                <select name="dat_usu" class="form-select" aria-label="Default select example">
                    <option value="{{$dat_usu->id}}">{{$dat_usu->name}}&nbsp;&nbsp;&nbsp;{{$dat_usu->celular}}</option>
                </select>
            </div>


            <div class="col-md-6">
                <br>
                <label for="">Seleccione a un Cliente:</label>
                <select name="dat_cli" class="form-select" aria-label="Default select example">
                    <option value="{{$dat_cli->id}}">{{$dat_cli->cnombre}} {{$dat_cli->capellido}}&nbsp;&nbsp;&nbsp;{{$dat_cli->ccelular}}</option>
                </select>
            </div>


            <div class="col-md-4">
                <br>
                {!! Form::label('intipo', 'Tipo') !!}
                {{ Form::select('intipo', array('Preparación del lugar de trabajo' => 'Preparación del lugar de trabajo', 'Cotización del trabajo' => 'Cotización del trabajo', 'Instalaciones varias  ' => 'Instalaciones varias  '), null, ['class' => 'form-control']) }}
            </div>

            <div class="col-md-4">
                <br>
                {!! Form::label('infecha', 'Fecha Asignada: ') !!}
                {!! Form::date('infecha', null, ['class' =>'form-control' . ($errors->has('infecha') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha de asignación... ' ]) !!}
                @error('infecha')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-4">
                <br>
                {!! Form::label('estado', 'Estado') !!}
                {{ Form::select('estado', array('Completo' => 'Completo', 'Trabajos en curso' => 'Trabajos en curso', 'Inconcluso' => 'Inconcluso'), null, ['class' => 'form-control']) }}
            </div>

            <div class="col-md-4">
                <br>
                {!! Form::label('inciudad', 'Ciudad: ') !!}
                {!! Form::text('inciudad',null, ['class' => 'form-control' . ($errors->has('inciudad') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese el nombre de la ciudad... ']) !!}
                @error('inciudad')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-8">
                <br>
                {!! Form::label('incalles', 'Calles: ') !!}
                {!! Form::text('incalles',null, ['class' => 'form-control' . ($errors->has('incalles') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese el nombre de las calles... ']) !!}
                @error('incalles')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-12">
                <br>
                {!! Form::label('inindescripcion', 'Descripcion: ') !!}
                {!! Form::text('inindescripcion',null, ['class' => 'form-control' . ($errors->has('inindescripcion') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese la descripción del trabajo... ']) !!}
                @error('inindescripcion')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-12">
                <br>
                {!! Form::label('inobservacion', 'Observaciones: ') !!}
                {!! Form::text('inobservacion',null, ['class' => 'form-control' . ($errors->has('inobservacion') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese alguna observación... ']) !!}
                @error('inobservacion')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>


            <div class="d-grid mx-auto">
                {!! Form::submit('Editar Instalación', ['class'=>'mt-4 btn btn-primary ']) !!}
                <br>
            </div>


        {!! Form::close() !!}
        <br>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


