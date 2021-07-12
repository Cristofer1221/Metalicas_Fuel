@extends('adminlte::page')

@section('title', 'Crear Notas de Ventas')

@section('content_header')
    <h1>Crear Notas de Ventas</h1>
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
        <div class="card-content">
            {!! Form::open(['route'=>'admin.ventas.store', 'class'=>'row g-3']) !!}


            <div class="d-grid mx-auto">
                {!! Form::submit('Crear Nota de Ventas', ['class'=>'mt-4 btn btn-primary ']) !!}
                <br>
            </div>

            {!! Form::close() !!}
        </div>

    </div>
@stop

@section('css')

@stop

@section('js')
   
@stop
