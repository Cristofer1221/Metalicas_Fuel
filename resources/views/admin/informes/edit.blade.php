@extends('adminlte::page')

    @section('title', 'Editar Informes')

    @section('content_header')
        <h1>Editar Informes</h1>
    @stop

    @section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
        </div>
    @endif

    <div class="card container">
        {!! Form::model($informe,['route'=> ['admin.informes.update',$informe],'class'=>'row g-3','method'=>'PUT']) !!}

            <div class="col-md-4">
                <br>
                <label for="">Instalación:</label>
                <select name="instalacion" class="form-select" aria-label="Default select example">
                        <option value="{{$informe->id}}">{{$informe->instalacions->cliente->cnombre." ".$informe->instalacions->cliente->capellido."   ".$informe->instalacions->cliente->ccelular}}</option>
                </select>
            </div>


            @include('admin.informes.partials.form')

            <div class="d-grid mx-auto">
                {!! Form::submit('Editar Informe', ['class'=>'mt-4 btn btn-primary ']) !!}
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
