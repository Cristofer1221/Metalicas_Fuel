@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Notas de Ventas</h1>
@stop

@section('content')
<a href="{{route('admin.ventas.create')}}" class="btn btn-success mb-2">Crear Nota de Venta</a>
<div class="card">
    @if (session('info'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
    </div>
    @endif

    <div class="card-body">
        <table  class="table table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Telf. Celular</th>
                    <th>Cédula</th>
                    <th>Fecha</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>


</div>


@stop

@section('css')

@stop

@section('js')
    
@stop
