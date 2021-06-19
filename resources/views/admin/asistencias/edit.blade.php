@extends('adminlte::page')

    @section('title', 'Editar Asistencias')

    @section('content_header')
        <h1>Editar Asistencias</h1>
    @stop

    @section('content')
        <div class="card table-responsive">
            @if (session('info'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    {!! Form::model($asistencia,['route'=> ['admin.asistencias.update',$asistencia],'class'=>'row g-3','method'=>'put']) !!}
                        <table class="table-responsive table">

                            <h5 class="card-header">Datos para editar estado de asistencia</h5>
                            <thead>
                                <th>Id</th>
                                <th>Empleado</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>{!! Form::submit('Editar Asistencia', ['class'=>'btn btn-primary mt-2 mx-auto']) !!}</th>
                            </thead>
                            <tbody>
                                <td>{{$asistencias_completas->id}}</td>
                                <td>{{$asistencias_completas->name}}</td>
                                <td>{{$asistencias_completas->fecha_trabajo}}</td>
                                <td>
                                    @if ($asistencia->estado==1)
                                        {!! Form::checkbox('presente[]',$asistencia->id,true, ['class'=>'mr-1']) !!}
                                    @else
                                        {!! Form::checkbox('presente[]',$asistencia->id,false, ['class'=>'mr-1']) !!}
                                    @endif
                                </td>
                            </tbody>
                        </table>
                    {!! Form::close() !!}
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

