<div class="col-md-6">
    <br>
    {!! Form::label('cnombre', 'Nombre: ') !!}
    {!! Form::text('cnombre',null, ['class' => 'form-control' . ($errors->has('cnombre') ? ' is-invalid' : ''), 'placeholder' =>'Escriba un nombre']) !!}
    @error('cnombre')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-6">
    <br>
    {!! Form::label('capellido', 'Apellido: ') !!}
    {!! Form::text('capellido',null, ['class' => 'form-control' . ($errors->has('capellido') ? ' is-invalid' : ''), 'placeholder' =>'Escriba un apellido']) !!}
    @error('capellido')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-4">
    <br>
    {!! Form::label('cemail', 'Correo Electrónico: ') !!}
    {!! Form::email('cemail',null, ['class' => 'form-control' . ($errors->has('cemail') ? ' is-invalid' : ''), 'placeholder' =>'Escriba un correo - example@gmail.com']) !!}

    @error('cemail')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-4">
    <br>
    {!! Form::label('ccedula', 'Cédula: ') !!}
    {!! Form::Number('ccedula',null, ['class' => 'form-control' . ($errors->has('ccedula') ? ' is-invalid' : ''), 'placeholder' =>'Cédula... ']) !!}
    @error('ccedula')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>


<div class="col-md-4">
    <br>
    {!! Form::label('ccelular', 'Celular: ') !!}
    {!! Form::Number('ccelular',null, ['class' => 'form-control' . ($errors->has('ccelular') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese un número celular... ']) !!}
    @error('ccelular')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>
