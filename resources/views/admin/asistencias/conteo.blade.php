@extends('adminlte::page')

    @section('title', 'Asistencias Personales')

    @section('content_header')
        <h1>Asistencias del Trabajador</h1>
    @stop

    @section('content')
        <div class="card-header">

            <div class="card text-center">
                <div class="card-header">
                    <h4>Datos de asistencias</h4>
                </div>
                <div class="card-body"  style="margin: 0 auto;">

                    <table class="table-responsive table text-center">
                        <thead>
                            <th class='text-center'>Id</th>
                            <th class='text-center'>Empleado</th>
                            <th class='text-center'>Asistencias totales</th>
                            <th class='text-center'># Presentes</th>
                            <th class='text-center'># Ausentes</th>
                        </thead>
                        <tbody class="text-center">
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$atotales}}</td>
                            <td>{{$presentes_1}}</td>
                            <td>{{$ausentes_0}}</td>
                        </tbody>

                    </table>

                </div>
                <div class="card-footer text-muted">

                </div>
              </div>


            <div class="card-body">

            </div>

        </div>

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop


