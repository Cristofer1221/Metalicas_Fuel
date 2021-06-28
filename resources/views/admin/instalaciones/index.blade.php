@extends('adminlte::page')

@section('title', 'Instalaciones')

@section('content_header')
    <h1>Instalaciones y Citas</h1>
@stop

@section('content')
    <a href="{{route('admin.instalaciones.create')}}" class="btn btn-success mb-2">Crear Instalación</a>
    <div class="card">
        @if (session('info'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
            </div>
        @endif

        <div class="card-body">
            <table  class="table table-responsive" id="instalaciones">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre Trabajador</th>
                        <th scope="col">Cel. Trabajador</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Cel. Cliente</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha Asiganada</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Calles</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $instalaciones as $instalacion)
                        <tr>
                            <td>{{$instalacion->id}}</td>
                            <td>{{$instalacion->usuario->name}}</td>
                            <td>{{$instalacion->usuario->celular}}</td>
                            <td>{{$instalacion->cliente->cnombre." ".$instalacion->cliente->capellido}}</td>
                            <td>{{$instalacion->cliente->ccelular}}</td>
                            <td>{{$instalacion->intipo}}</td>
                            <td>{{$instalacion->infecha}}</td>
                            <td>{{$instalacion->estado}}</td>
                            <td>{{$instalacion->inciudad}}</td>
                            <td>{{$instalacion->incalles}}</td>
                            <td>{{$instalacion->inindescripcion}}</td>
                            <td>{{$instalacion->inobservacion}}</td>

                            <td>
                                <form action="{{route('admin.instalaciones.destroy', $instalacion)}}" class="formulario-eliminar" method="POST">
                                    <a  class="btn btn-primary" href="{{route('admin.instalaciones.edit',$instalacion)}}">Editar</a>
                                    @method('delete')
                                    @csrf
                                    &nbsp;
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                    <a href="{{route('admin.instalaciones.show',$instalacion)}}" class="btn btn-info">PDF</a>
                                </form>
                            </td>
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#instalaciones').DataTable({
            responsive: true,
            autoWidth: false,
            order: [ 0, 'desc' ],

            language: {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - disculpa.",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                'search': 'Buscar:',
                'paginate': {
                    'next': 'Siguiente',
                    'previous': 'Anterior'
                    }
                }
            });
        });
    </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('info')=='La instalación se elimino con éxito.')
    <script>
        Swal.fire(
            '¡Eliminado!',
            'La instalación se elimino con éxito.',
            'success'
            )
    </script>

@endif

<script>
    $('.formulario-eliminar').submit(function (e) {
        e.preventDefault();
        Swal.fire({
        title: '¿Estás seguro?',
        text: "¡La instalación se elmininará definitivamente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Si, eliminar!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {

            this.submit();
        }
    })
    });
    //
</script>

@stop


