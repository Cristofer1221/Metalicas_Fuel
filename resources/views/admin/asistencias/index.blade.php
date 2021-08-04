@extends('adminlte::page')

@section('title', 'Asistencias del Personal')



@section('content_header')
    <h1>Asistencias del Personal</h1>
@stop

@section('content')
    @can('Crear Asistencia')
        <a href="{{route('admin.asistencias.create')}}" class="btn btn-success mb-2">Crear Asistencia</a>
    @endcan

    <div class="card">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
        </div>
        @endif

        <div class="card-body">
            <table  class="table table-striped" id="asistencias">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Empleado</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($asistencias as $asistencia)
                        <tr>
                            <td>{{$asistencia->id}}</td>
                            <td>{{$asistencia->name}}</td>
                            <td>{{$asistencia->fecha_trabajo}}</td>
                            @if ($asistencia->estado!=0)
                                <td>Presente</td>
                            @else
                                <td>Ausente</td>
                            @endif

                            <td>
                                @can('Eliminar Asistencia')
                                    <form action="{{route('admin.asistencias.destroy', $asistencia)}}" class="formulario-eliminar" method="POST">
                                        
                                        @can('Editar Asistencia')
                                            <a  class="btn btn-primary" href="{{route('admin.asistencias.edit',$asistencia)}}">Editar</a>
                                        @endcan

                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                @endcan

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
    $('#asistencias').DataTable({
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

@if (session('info')=='La asistencia se elimino con éxito.')
    <script>
        Swal.fire(
            '¡Eliminado!',
            'La asistencia se elimino con éxito.',
            'success'
            )
    </script>

@endif

<script>
    $('.formulario-eliminar').submit(function (e) {
        e.preventDefault();
        Swal.fire({
        title: '¿Estás seguro?',
        text: "¡La asistencia se elmininará definitivamente!",
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


