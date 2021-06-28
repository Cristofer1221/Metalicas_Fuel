@extends('adminlte::page')

@section('title', 'Instalaciones')

@section('content_header')
    <h1>Creación de Instalaciones</h1>
@stop

@section('content')
    <div class="card container">

        <div class="card-content">
            {!! Form::open(['route'=>'admin.instalaciones.store', 'class'=>'row g-3']) !!}
                <div class="col-md-6">
                    <br>
                    <label for="">Seleccione a un Trabajor:</label>
                    <select name="dat_usu" class="form-select" aria-label="Default select example">
                        @foreach ($dat_usu as $trabajador )
                            <option value="{{$trabajador->id}}">{{$trabajador->name}}&nbsp;&nbsp;&nbsp;{{$trabajador->celular}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-6">
                    <br>
                    <label for="">Seleccione a un Cliente:</label>
                    <select name="dat_cli" class="form-select" aria-label="Default select example">
                        @foreach ($dat_cli as $cliente )
                            <option value="{{$cliente->id}}">{{$cliente->cnombre}} {{$cliente->capellido}}&nbsp;&nbsp;&nbsp;{{$cliente->ccelular}}</option>
                        @endforeach
                    </select>
                </div>

                @include('admin.instalaciones.partials.form')

                <div class="d-grid mx-auto">
                    {!! Form::submit('Crear Instalación', ['class'=>'mt-4 btn btn-primary ']) !!}
                    <br>
                </div>


            {!! Form::close() !!}
            <br>
        </div>

    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

