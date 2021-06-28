
<div class="col-md-4">
    <br>
    {!! Form::label('intipo', 'Tipo') !!}
    {{ Form::select('intipo', array('Preparación del lugar de trabajo' => 'Preparación del lugar de trabajo', 'Cotización del trabajo' => 'Cotización del trabajo', 'Instalaciones varias  ' => 'Instalaciones varias  '), null, ['class' => 'form-control']) }}
</div>

<div class="col-md-4">
    <br>
    {!! Form::label('infecha', 'Fecha Asignada: ') !!}
    {!! Form::date('infecha', null, ['class' =>'form-control' . ($errors->has('infecha') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha de asignación... ' ]) !!}
    @error('infecha')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-4">
    <br>
    {!! Form::label('estado', 'Estado') !!}
    {{ Form::select('estado', array('Completo' => 'Completo', 'Trabajos en curso' => 'Trabajos en curso', 'Inconcluso' => 'Inconcluso'), null, ['class' => 'form-control']) }}
</div>

<div class="col-md-4">
    <br>
    {!! Form::label('inciudad', 'Ciudad: ') !!}
    {!! Form::text('inciudad',null, ['class' => 'form-control' . ($errors->has('inciudad') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese el nombre de la ciudad... ']) !!}
    @error('inciudad')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-8">
    <br>
    {!! Form::label('incalles', 'Calles: ') !!}
    {!! Form::text('incalles',null, ['class' => 'form-control' . ($errors->has('incalles') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese el nombre de las calles... ']) !!}
    @error('incalles')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-12">
    <br>
    {!! Form::label('inindescripcion', 'Descripción: ') !!}
    {!! Form::text('inindescripcion',null, ['class' => 'form-control' . ($errors->has('inindescripcion') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese la descripción del trabajo... ']) !!}
    @error('inindescripcion')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-12">
    <br>
    {!! Form::label('inobservacion', 'Observaciones: ') !!}
    {!! Form::text('inobservacion',null, ['class' => 'form-control' . ($errors->has('inobservacion') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese alguna observación... ']) !!}
    @error('inobservacion')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>
