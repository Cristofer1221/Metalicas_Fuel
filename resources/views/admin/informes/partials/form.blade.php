<div class="col-md-4">
    <br>
    {!! Form::label('ifecha', 'Fecha de Creación: ') !!}
    {!! Form::date('ifecha', null, ['class' =>'form-control' . ($errors->has('ifecha') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha de asignación... ' ]) !!}
    @error('ifecha')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="col-md-4">
    <br>
    {!! Form::label('iestado', 'Estado') !!}
    {{ Form::select('iestado', array('Completo' => 'Completo', 'Trabajos en curso' => 'Trabajos en curso', 'Inconcluso' => 'Inconcluso'), null, ['class' => 'form-control']) }}
</div>

<div class="col-md-6">
    <br>
    {!! Form::label('idescripcion', 'Descripción: ') !!}
    {!! Form::textarea('idescripcion',null, ['class' => 'form-control' . ($errors->has('idescripcion') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese la descripción del Informe... ']) !!}
    @error('idescripcion')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>
<div class="col-md-6">
    <br>
    {!! Form::label('iobservaciones', 'Observación: ') !!}
    {!! Form::textarea('iobservaciones',null, ['class' => 'form-control' . ($errors->has('iobservaciones') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese la observacion del Informe... ']) !!}
    @error('iobservaciones')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>



