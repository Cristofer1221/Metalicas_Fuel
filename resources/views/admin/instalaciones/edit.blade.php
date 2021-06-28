@extends('adminlte::page')

@section('title', 'Editar Instalaciones')

@section('content_header')
    <h1>Editar Instalaciones</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
        </div>
    @endif

    <div class="card container">
        {!! Form::model($instalacione,['route'=> ['admin.instalaciones.update',$instalacione],'class'=>'row g-3','method'=>'PUT']) !!}
            <div class="col-md-6">
                <br>
                <label for="">Trabajor:</label>
                <select name="dat_usu" class="form-select" aria-label="Default select example">
                    <option value="{{$dat_usu->id}}">{{$dat_usu->name}}&nbsp;&nbsp;&nbsp;{{$dat_usu->celular}}</option>
                </select>
            </div>


            <div class="col-md-6">
                <br>
                <label for="">Cliente:</label>
                <select name="dat_cli" class="form-select" aria-label="Default select example">
                    <option value="{{$dat_cli->id}}">{{$dat_cli->cnombre}} {{$dat_cli->capellido}}&nbsp;&nbsp;&nbsp;{{$dat_cli->ccelular}}</option>
                </select>
            </div>


            @include('admin.instalaciones.partials.form')


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


