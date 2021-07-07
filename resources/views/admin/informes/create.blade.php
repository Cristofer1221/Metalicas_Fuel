@extends('adminlte::page')

@section('title', 'Crear Informe')

@section('content_header')
    <h1>Creación de Informe</h1>
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
            {!! Form::open(['route'=>'admin.informes.store', 'class'=>'row g-3']) !!}
                <div class="col-md-4">
                    <br>
                    <label for="">Seleccione una Instalación:</label>
                    <select name="instalacion" class="form-select" aria-label="Default select example">
                        @foreach ($instalacion as $insta )
                            <option value="{{$insta->id}}">{{$insta->cliente->cnombre." ".$insta->cliente->capellido."   ".$insta->cliente->ccelular}}</option>
                        @endforeach
                    </select>
                </div>

                @include('admin.informes.partials.form')

                <div class="d-grid mx-auto">
                    {!! Form::submit('Crear Informe', ['class'=>'mt-4 btn btn-primary ']) !!}
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

