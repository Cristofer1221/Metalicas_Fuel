@extends('adminlte::page')

@section('title', 'Toma de Asistencias')

@section('content_header')
    <h1>Asistencias Personal</h1>
@stop

@section('content')
<div class="card table-responsive">
    @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="card-body">
        <table class="table-responsive table">
            {!! Form::open(['route'=>'admin.asistencias.store']) !!}
                <div class="col-md-6">
                    <label for="">Seleccione fecha de asistencia:</label>
                    <select name="fecha" class="form-select" aria-label="Default select example">
                        @foreach ($fechas as $fecha )
                            <option value="{{$fecha->id}}">{{$fecha->fecha_trabajo}}</option>
                        @endforeach
                    </select>
                </div>

                <thead>
                    <th>Id</th>
                    <th>Nombre de Trabajador</th>
                    <th>Asistencia</th>
                    <th>
                        {!! Form::submit('Registrar ', ['class'=>'btn btn-primary mt-2 md-6']) !!}
                    </th>
                </thead>

                <tbody>
                    @foreach ($datos_usuarios as $datos)
                        <tr>
                            <td>{{$datos->id}}</td>
                            <td>{{$datos->name}}</td>
                            <td class="text-center">{{Form::checkbox('presente[]',$datos->id , false)}}</td>
                        </tr>
                     @endforeach
                </tbody>



            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!');
@stop
