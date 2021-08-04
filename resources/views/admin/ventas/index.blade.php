@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Notas de Ventas</h1>
@stop

@section('content')
<div class="card">
    @if (session('info'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
    </div>
    @endif

    <div class="card-body">
        <table  class="table table-responsive" id="ventas">
            <thead>
                <tr>
                    <th scope="col">Id</th >
                    <th scope="col">Cliente</th >
                    <th scope="col">Telf. Celular</th >
                    <th scope="col">Cédula</th >
                    <th scope="col">Fecha</th >
                    <th scope="col">Forma de Pago</th >
                    <th scope="col">Subtotal</th >
                    <th scope="col">I.V.A</th >
                    <th scope="col">Total</th >
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($ventas) --}}
                @foreach ($ventas as $venta )
                <tr>
                    <td>{{$venta->id}}</td>
                    <td>{{$venta->instalaciones->cliente->cnombre." ".$venta->instalaciones->cliente->capellido}}</td>
                    <td>{{$venta->instalaciones->cliente->ccelular}}</td>
                    <td>{{$venta->instalaciones->cliente->ccedula}}</td>
                    <td>{{$venta->vfecha}}</td>
                    <td>{{$venta->vpago}}</td>
                    <td>{{$venta->vsubtotal}}</td>
                    <td>{{$venta->viva}}</td>
                    <td>{{$venta->vtotal}}</td>

                    @can('Mostrar PDF Ventas')
                        <td>
                            <a href="{{route('admin.ventas.show',$venta)}}" class="btn btn-success" target="_blank">PDF</a>
                        </td>
                    @endcan

                    @can('Eliminar Ventas')
                        <td>
                            <form action="{{route('admin.ventas.destroy', $venta)}}" class="formulario-eliminar" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    @endcan
                    
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
        $('#ventas').DataTable({
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

    @if (session('info')=='La nota de venta se elimino con éxito.')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'La nota de venta se eliminó con éxito.',
                'success'
                )
        </script>

    @endif

    <script>
        $('.formulario-eliminar').submit(function (e) {
            e.preventDefault();
            Swal.fire({
            title: '¿Estás seguro?',
            text: "¡La nota de venta se elmininará definitivamente!",
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
