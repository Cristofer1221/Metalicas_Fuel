@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1> Editar Usuario y Asignar Rol</h1>
@stop

@section('content')
    <div class="card">
        @if (session('info'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">¡Éxito!</h4> {{session('info')}}
            </div>
        @endif
        <div class="card-header card-footer text-muted">
            <h5>&nbsp; Datos de Usuario Modificado</h5>
        </div>
        <div class="card-body text-center mx-auto ">
            <div class="card mb-0 " style="max-width: 540px;">
              <div class="row g-8">
                    <div class="col-md-4">

                        <img src="{{$user->profile_photo_url}}" width="100" >

                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Datos:</h5>
                        <p class="card-text">
                            Nombre: <span>{{$user->name}}</span> <br>
                            Correo: <span>{{$user->email}}</span>
                        </p>
                    </div>
                    </div>
              </div>
            </div>

          </div>

        <div class="card-body">

            {!! Form::model($user,['route'=> ['admin.users.update',$user],'method'=>'put','class'=>'row g-3']) !!}
                <div class="col-md-4">
                    <label>Asignación de Rol</label>
                    @foreach ($roles as $role)
                        <div>
                            <label>
                                {!! Form::checkbox('roles[]',$role->id,null, ['class'=>'mr-1']) !!}
                                {{$role->name}}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-4">
                <br>
                    {!! Form::label('name', 'Nombre: ') !!}
                    {!! Form::text('name',null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' =>'Escriba un nombre']) !!}
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                <br>
                </div>

                <div class="col-md-4">
                    <br>
                    {!! Form::label('email', 'Correo Electrónico: ') !!}
                    {!! Form::email('email',null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' =>'Escriba un correo - example@gmail.com']) !!}

                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <br>
                    {!! Form::label('cedula', 'Cédula: ') !!}
                    {!! Form::text('cedula',null, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' =>'Cedula... ']) !!}
                </div>

                <div class="col-md-4">
                    <br>
                    {!! Form::label('nacimiento', 'Fecha de Nacimiento: ') !!}
                    {!! Form::date('nacimiento', null, ['class' =>'form-control' . ($errors->has('nacimiento') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha de nacimiento... ' ]) !!}
                </div>

                <div class="col-md-4">
                    <br>
                    {!! Form::label('estadocivil', 'Estado Civil: ') !!}
                    {{ Form::select('estadocivil', array('solter@' => 'solter@', 'casad@' => 'casad@', 'divorciad@' => 'divorciad@', 'viud@' => 'viud@', 'unión libre' => 'unión libre', 'unión de hecho' => 'unión de hecho', 'otros'=>'otros'), null, ['class' => 'form-control']) }}

                </div>

                <div class="col-md-8">
                    <br>
                    {!! Form::label('direccion', 'Dirección del Domicilio: ') !!}
                    {!! Form::text('direccion',null, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese la dirección del domicilio... ']) !!}
                </div>

                <div class="col-md-4">
                    <br>
                    {!! Form::label('ptelefono', 'Teléfono Convencional: ') !!}
                    {!! Form::text('telefono',null, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese un número telefónico convencional... ']) !!}
                </div>

                <div class="col-md-3">
                    <br>
                    {!! Form::label('celular', 'Celular: ') !!}
                    {!! Form::text('celular',null, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese un número celular.. ']) !!}
                </div>

                <div class="col-md-3">
                    <br>
                    {!! Form::label('especializacion', 'Especialización del personal') !!}
                    {{ Form::select('especializacion', array('Tec. Artesanal' => 'Tec. Artesanal', 'Tec. Industrial' => 'Tec. Industrial', 'Administrativ@' => 'Administrativ@'), null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-3">
                    <br>
                    {!! Form::label('jornada', 'Jornada Laboral') !!}
                    {{ Form::select('jornada', array('Matutina' => 'Matutina', 'Vespertina' => 'Vespertina', 'Completa' => 'Completa'), null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-3">
                    <br>
                    {!! Form::label('genero', 'Genero') !!}
                    {{ Form::select('genero', array('M' => 'M', 'F' => 'F', 'Otros' => 'Otros'), null, ['class' => 'form-control']) }}
                </div>

                <div class="d-grid gap-6 col-4 mx-auto">
                    {!! Form::submit('Editar Datos', ['class'=>'btn btn-primary mt-2']) !!}
                </div>

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
