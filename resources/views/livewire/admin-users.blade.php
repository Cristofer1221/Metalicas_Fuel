<div>
    <div class="card table-responsive">
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search"  class="form-control w-100" placeholder="Escriba un nombre">
        </div>

        @if (session('info'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
            </div>
        @endif

        @if ($users->count())

            <div class="card-body">
                <a class="btn btn-success" href="{{route('admin.users.create')}}">Crear Usuario</a>
                <br>
                <table class="table-responsive table">
                    {{-- <table class="table table-striped"> --}}
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Cedula</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Estado Civil</th>
                            <th>Dirección</th>
                            <th>Telf. Convencional</th>
                            <th>Celular</th>
                            <th>Especialización</th>
                            <th>Jornada</th>
                            <th>Genero</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->cedula}}</td>
                                    <td>{{$user->nacimiento}}</td>
                                    <td>{{$user->estadocivil}}</td>
                                    <td>{{$user->direccion}}</td>
                                    <td>{{$user->telefono}}</td>
                                    <td>{{$user->celular}}</td>
                                    <td>{{$user->especializacion}}</td>
                                    <td>{{$user->jornada}}</td>
                                    <td>{{$user->genero}}</td>

                                    <td width="10px">

                                        <td >
                                            <a  class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a>
                                        </td>

                                        <td >
                                            <form action="{{route('admin.users.destroy', $user)}}" class="formulario-eliminar" method="POST">
                                                @method('delete')
                                                @csrf
                                            <button class="btn btn-danger" type="submit">Eliminar</button>
                                            </form>
                                        </td>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    {{-- </table> --}}
                </table>
            </div>
            <div class="card-footer">
                {{$users->links()}}
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

    @if (session('info')=='El usuario se elimino con éxito.')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El usuario se elimino con éxito.',
                'success'
                )
        </script>

    @endif

    <script>
        $('.formulario-eliminar').submit(function (e) {
            e.preventDefault();
            Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Este usuario se eliminara definitivamente!",
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
