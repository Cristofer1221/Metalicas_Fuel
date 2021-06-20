@extends('adminlte::page')

    @section('title', 'Editar Clientes')

    @section('content_header')
        <h1>Editar Clientes</h1>
    @stop

    @section('content')

        <div class="card container">
            @if (session('info'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
                </div>
            @endif

            {!! Form::model($cliente,['route'=> ['admin.clientes.update',$cliente],'class'=>'row g-3','method'=>'put']) !!}

                @include('admin.clientes.partials.form')

                <div class="d-grid gap-6 col-4 mx-auto">
                    <br>
                    {!! Form::submit('Actualizar Cliente', ['class'=>'btn btn-primary mt-2']) !!}

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

