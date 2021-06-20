@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Crear Cliente</h1>
@stop

@section('content')
<div class="card container">
    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
            {!! Form::open(['route'=>'admin.clientes.store', 'class'=>'row g-3']) !!}

                @include('admin.clientes.partials.form')

                <div class="d-grid gap-6 col-4 mx-auto">
                    {!! Form::submit('Crear Cliente', ['class'=>'mt-4 btn btn-primary ']) !!}
                </div>

            {!! Form::close() !!}
            <br>

        </div>

    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


