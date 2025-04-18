@extends('adminlte::page')

    @section('title', 'Editar Rol')

    @section('content_header')
        <h1>Editar Rol</h1>
    @stop

    @section('content')
        <div class="card">
            @if (session('info'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
                </div>
            @endif
            <div class="card-body">
                {!! Form::model($role,['route'=>['admin.roles.update', $role], 'method'=>'put']) !!}

                    @include('admin.roles.partials.form')

                    @can('Editar Role')
                        {!! Form::submit('Actualizar Rol', ['class'=>'btn btn-primary mt-2']) !!}
                    @endcan

                {!! Form::close() !!}

            </div>
        </div>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
