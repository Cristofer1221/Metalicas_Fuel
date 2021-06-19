<div>
    <div class="card table-responsive">
        @if (session('info'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
            </div>
        @endif

        @if($fechas->count())
        <div class="card text-center">
            <div class="card-header">
              Fechas
            </div>
            <div class="card-body" style="margin: 0 auto;">
                <table class="table-responsive table">
                    <thead>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th><a class="btn btn-success" href="{{route('admin.fechas.create')}}">Crear Fecha</a></th>

                    </thead>

                    <tbody>
                        @foreach ($fechas as $fecha)
                            <tr>
                                <td>{{$fecha->id}}</td>
                                <td>{{$fecha->fecha_trabajo}}</td>
                                <td>
                                    <a  class="btn btn-primary" href={{route('admin.fechas.edit',$fecha)}}>Editar</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.fechas.destroy', $fecha)}}" class="formulario-eliminar" method="POST">
                                        @method('delete')
                                        @csrf
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$fechas->links()}}
            </div>
        @else
            <div class="card-body alert alert-danger d-flex align-items-center" role="alert">

                <strong>No hay registros!</strong>
            </div>
        @endif

            <div class="card-footer text-muted">

            </div>
          </div>

    </div>

</div>
