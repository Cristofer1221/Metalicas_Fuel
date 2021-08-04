@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            @can('Crear Role')
                <a class="btn btn-success d-grid gap-6 col-4 mx-auto" href="{{route('admin.roles.create')}}">Crear Rol</a>
            @endcan
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>


                            @can('Editar Role')
                                <td width="10px" >
                                    <a class="btn btn-secondary" href="{{route('admin.roles.edit',$role)}}">
                                        Editar
                                    </a>
                                </td>
                            @endcan

                            @can('Eliminar Role')
                                <td width="10px">
                                    <form action="{{route('admin.roles.destroy', $role)}}" class="formulario-eliminar" method="POST">
                                        @method('delete')
                                        @csrf

                                        <button class="btn btn-danger" type="submit">Eliminar</button>

                                    </form>
                                </td>
                            @endcan

                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningun rol registrado</td>
                        </tr>

                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('info')=='El rol se eliminó con éxito.')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El rol se eliminó con éxito.',
                'success'
                )
        </script>

    @endif

    <script>
        $('.formulario-eliminar').submit(function (e) {
            e.preventDefault();
            Swal.fire({
            title: '¿Estás seguro?',
            text: "¡El rol se elmininará definitivamente!",
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
    </script>

@stop
