<div>
    <div class="card table-responsive">
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search"  class="form-control w-100"
            placeholder="Realice una busqueda por nombre, apellido, correo, cédula y celular">
        </div>

        @if (session('info'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
            </div>
        @endif
        <br>
        @can('Crear Clientes')
            <a class="btn btn-success d-grid gap-2 col-6 mx-auto" href="{{route('admin.clientes.create')}}">Crear Cliente</a>
        @endcan

        @if ($clientes->count())

            <div class="card-body" style="margin: 0 auto;">

                <table class="table-responsive table">
                    {{-- <table class="table table-striped"> --}}
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electrónico</th>
                            <th>Cédula</th>
                            <th>Número Celular</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->cnombre}}</td>
                                    <td>{{$cliente->capellido}}</td>
                                    <td>{{$cliente->cemail}}</td>
                                    <td>{{$cliente->ccedula}}</td>
                                    <td>{{$cliente->ccelular}}</td>

                                    @can('Editar Clientes')
                                        <td>
                                            <a  class="btn btn-primary" href="{{route('admin.clientes.edit',$cliente)}}">Editar</a>
                                        </td>
                                    @endcan
                                    @can('Eliminar Clientes')
                                        <td>
                                            <form action="{{route('admin.clientes.destroy', $cliente)}}" class="formulario-eliminar" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Eliminar</button>
                                            </form>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    {{-- </table> --}}
                </table>

            </div>
            <div class="card-footer">
                {{$clientes->links()}}
            </div>
        @else
            <div class="card-body alert alert-danger d-flex align-items-center" role="alert">

                <strong>No hay registros!</strong>
            </div>
        @endif

    </div>
</div>

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('info')=='El cliente se elimino con éxito.')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El cliente se elimino con éxito.',
                'success'
                )
        </script>

    @endif

    <script>
        $('.formulario-eliminar').submit(function (e) {
            e.preventDefault();
            Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Este cliente se eliminara definitivamente!",
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
