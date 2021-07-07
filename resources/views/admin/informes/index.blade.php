@extends('adminlte::page')

    @section('title', 'Informes')

    @section('content_header')
        <h1>Informes</h1>
    @stop

    @section('content')
    <a href="{{route('admin.informes.create')}}" class="btn btn-success mb-2">Crear Informe</a>
    <div class="card">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
        </div>
        @endif
        <div class="card-body">
            <table  class="table table-responsive" id="informes">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Info. del cliente</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($informes as $informe )
                    <tr>
                        <td>{{$informe->id}}</td>
                        <td>{{$informe->instalacions->cliente->cnombre
                        ." ".$informe->instalacions->cliente->capellido
                        ." ". $informe->instalacions->cliente->ccelular}}</td>
                        <td>{{$informe->ifecha}}</td>
                        <td>{{$informe->iestado}}</td>
                        <td>{{$informe->idescripcion}}</td>
                        <td>{{$informe->iobservaciones}}</td>
                        <td>
                            <form action="{{route('admin.informes.destroy', $informe)}}" class="formulario-eliminar" method="POST">
                                <a  class="btn btn-primary" href="{{route('admin.informes.edit',$informe)}}">Editar</a>
                                @method('delete')
                                @csrf
                                
                                <button class="btn btn-danger" type="submit">Eliminar</button>

                                <a href="{{route('admin.informes.show',$informe)}}" class="btn btn-info" target="_blank">PDF</a>
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
        $('#informes').DataTable({
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
        @if (session('info')=='El informe se eliminó con éxito.')
            <script>
                Swal.fire(
                    '¡Eliminado!',
                    'El informe se eliminó con éxito.',
                    'success'
                    )
            </script>
        @endif
        <script>
            $('.formulario-eliminar').submit(function (e) {
                e.preventDefault();
                Swal.fire({
                title: '¿Estás seguro?',
                text: "¡El informe se elmininará definitivamente!",
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

