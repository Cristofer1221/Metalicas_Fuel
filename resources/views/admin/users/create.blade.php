@extends('adminlte::page')

@section('title', 'Crear Usuario')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')

    <div class="card container">
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
                {!! Form::open(['route'=>'admin.users.store', 'class'=>'row g-3']) !!}

                    <div class="col-md-4">
                        <br>
                        {!! Form::label('name', 'Nombre: ') !!}
                        {!! Form::text('name',null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' =>'Escriba un nombre']) !!}
                        @error('name')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
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
                        {!! Form::Number('cedula',null, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' =>'Cedula... ']) !!}
                        @error('cedula')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <br>
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Escriba una contraseña">
                    </div>

                    <div class="col-md-6">
                        <br>
                        <label for="password_confirmation">Confirmar contraseña:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme su contraseña">
                    </div>

                    <div class="col-md-3">
                        <br>
                        {!! Form::label('nacimiento', 'Fecha de Nacimiento: ') !!}
                        {!! Form::date('nacimiento', null, ['class' =>'form-control' . ($errors->has('nacimiento') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha de nacimiento... ' ]) !!}
                        @error('nacimiento')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <br>
                        {!! Form::label('estadocivil', 'Estado Civil: ') !!}
                        {{ Form::select('estadocivil', array('solter@' => 'solter@', 'casad@' => 'casad@', 'divorciad@' => 'divorciad@', 'viud@' => 'viud@', 'unión libre' => 'unión libre', 'unión de hecho' => 'unión de hecho', 'otros'=>'otros'), null, ['class' => 'form-control']) }}

                    </div>

                    <div class="col-md-7">
                        <br>
                        {!! Form::label('direccion', 'Dirección del Domicilio: ') !!}
                        {!! Form::text('direccion',null, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese la dirección del domicilio... ']) !!}
                        @error('direccion')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <br>
                        {!! Form::label('telefono', 'Teléfono Convencional: ') !!}
                        {!! Form::Number('telefono',null, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese un número telefónico convencional... ']) !!}
                        @error('telefono')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <br>
                        {!! Form::label('celular', 'Celular: ') !!}
                        {!! Form::Number('celular',null, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese un número celular.. ']) !!}
                        @error('celular')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <br>
                        {!! Form::label('especializacion', 'Especialización del personal') !!}
                        {{ Form::select('especializacion', array('Tec. Artesanal' => 'Tec. Artesanal', 'Tec. Industrial' => 'Tec. Industrial', 'Administrativ@' => 'Administrativ@'), null, ['class' => 'form-control']) }}
                    </div>

                    <div class="col-md-3">
                        <br>
                        {!! Form::label('genero', 'Genero') !!}
                        {{ Form::select('genero', array('M' => 'M', 'F' => 'F', 'Otros' => 'Otros'), null, ['class' => 'form-control']) }}
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        {!! Form::submit('Crear Usuario', ['class'=>'mt-4 btn btn-primary ']) !!}
                    </div>

                {!! Form::close() !!}
                <br>

            </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
