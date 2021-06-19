@extends('adminlte::page')

@section('title', 'Fechas')

@section('content_header')
    <h1>Fechas de asistencia</h1>
@stop

@section('content')

    @livewire('admin-fecha')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('info')=='El usuario se elimino con éxito.')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'La fecha se elimino con éxito.',
                'success'
                )
        </script>

    @endif

    <script>
        $('.formulario-eliminar').submit(function (e) {
            e.preventDefault();
            Swal.fire({
            title: '¿Estás seguro?',
            text: "¡La fecha se eliminará definitivamente!",
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

