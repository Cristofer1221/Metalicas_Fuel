@extends('adminlte::page')

@section('title', 'Nota de Venta')

@section('content_header')
    <h1>Nota de Venta</h1>
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

        {{-- @dd($cliente) --}}
        <div class="card-content">
            <br>
            <label for="formFile" class="form-label">Datos del Cliente</label>
            {!! Form::open(['route'=>'admin.instalaciones.guardarnotas', 'class'=>'row g-3']) !!}

                <input id="cliente_id" name="cliente_id" class="form-control " type="text" placeholder="Id" value="{{$id_instalacion}}" hidden="true" />

                <div class="col-6">
                    <label for="formFile">Nombre del Cliente:</label>
                    <input class="form-control" type="text" placeholder="Cliente" value="{{$cliente->cnombre ." ".$cliente->capellido}}" />
                </div>

                <div class="col-2">
                    <label for="formFile">Cedula/RUC:</label>
                    <input class="form-control" type="text" placeholder="Ruc/Cedula"  value="{{$cliente->ccedula}}" />
                </div>

                <div class="col-4">
                    <label for="formFile">Correo Electrónico:</label>
                    <input class="form-control" type="text" placeholder="Dirección de Correo Electrónico"  value="{{$cliente->cemail}}" />
                </div>

                <div class="col-3">
                    <br>
                    <label for="formFile">Forma de Pago:</label>
                    {{ Form::select('vpago', array('Efectivo' => 'Efectivo', 'Transferencia' => 'Transferencia', 'Cheque' => 'Cheque'), null, ['class' => 'form-control']) }}
                </div>

                <div class="col-3">
                    <br>
                    <label for="formFile">Telefono Celular:</label>
                    <input class="form-control" name="ClienteCel" Id="ClienteCel" type="text" placeholder="Telf."  value="{{$cliente->ccelular}}" readonly/>
                </div>

                <div class="col-6">
                    <br>
                    <label for="formFile">Fecha:</label>
                    {!! Form::date('vfecha', null, ['class' =>'form-control' . ($errors->has('vfecha') ? ' is-invalid' : ''), 'placeholder' =>'Ingrese fecha para asistencia... ' ]) !!}
                </div>

                <div class="col-12">
                    <hr color="gray" size=1 width="250">
                </div>



                <div class="col-7">
                    <br>
                    <input id="vdetalle" class="form-control" type="text" placeholder="Detalle"/>
                </div>
                <div class="col-2">
                    <br>
                    <input id="vcantidad" class="form-control" type="number" placeholder="Cantidad" />
                </div>
                <div class="col-2">
                    <br>
                    <input id="vvalor_unitario" class="form-control" type="number" step="0.01" placeholder="Precio" />
                </div>

                <div class="col-1">
                    <br>
                    <a href="javascript:;" id="agregar" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i>
                    </a>
                    <br>
                </div>

                <hr color="gray" size=1 width="250">

                <table class="table table-striped" id="tabla">
                    <thead>
                        <tr>
                            <th style="width:40px;"></th>
                            <th class="text-center">Detalle</th>
                            <th style="width:100px;">Cantidad</th>
                            <th style="width:100px;">P.Unitario</th>
                            <th style="width:100px;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="text-right">
                                <b>Sub Total $</b>
                                <input type="number" step="0.01" id="vsubtotal" name="vsubtotal"readonly/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">
                                <b>I.V.A 12% $</b>
                                <input type="number" step="0.01" id="viva" name="viva"readonly/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">
                                <b>Total $</b>
                                <input type="number" step="0.01" id="vtotal" name="vtotal" readonly/>
                            </td>
                        </tr>
                    </tfoot>
                    <input type="text" id="detalle" name="detalle" hidden="true">
                </table>


                <div class="d-grid mx-auto">
                    {!! Form::submit('Crear Nota de Ventas', ['class'=>'mt-4 btn btn-primary ']) !!}
                </div>

            {!! Form::close() !!}
            <br>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">

        var detalle="";
        $('#agregar').click(function(){
            agregar();
            setear();
            document.getElementById("detalle").value = detalle;
        });

        var vvalor_unitario=0,vvalor_total=0,vsubtotal=0,viva=0,vtotal=0;


        function agregar(){
            calcular();
            var vdetalle=$('#vdetalle').val();
            var vcantidad=$('#vcantidad').val();
            var vvalor_unitario=$('#vvalor_unitario').val();



            // vvalor_total=vcantidad*vvalor_unitario;

            // vsubtotal=vsubtotal+vvalor_total;
            // viva=((vsubtotal*12)/100);
            // vtotal=vsubtotal+viva;


            var fila=
            '<tr>'+
            '<td><a  id="eliminar" onclick = "deleteRow(this)" class="btn btn-danger btn-xs btn-block">X</a></td>'+
            '<td><input class="form-control" type="text"   value="'+vdetalle+'" readonly></td>'+
            '<td><input class="form-control" type="number"  value="'+vcantidad+'" readonly></td>'+
            '<td><input class="form-control" type="number" step="0.01"  value="'+vvalor_unitario+'" readonly></td>'+
            '<td><input class="form-control" type="number" step="0.01"  value="'+vvalor_total+'" readonly></td>'+
            '</tr>';

            $('#tabla').append(fila);

            detalle += vdetalle+"&"+vcantidad+"&"+vvalor_unitario+"&"+vvalor_total+"#";

            $('#detalle').val(detalle);

            // $('#vsubtotal').val(vsubtotal.toFixed(2));
            // $('#viva').val(viva.toFixed(2));
            // $('#vtotal').val(vtotal.toFixed(2));
        }

        function setear(){
            document.getElementById('vdetalle').value="";
            document.getElementById('vcantidad').value="";
            document.getElementById('vvalor_unitario').value="";
        }

        function calcular(){
            var vcantidad=$('#vcantidad').val();
            var vvalor_unitario=$('#vvalor_unitario').val();


            vvalor_total=vcantidad*vvalor_unitario;

            vsubtotal=vsubtotal+vvalor_total;
            viva=((vsubtotal*12)/100);
            vtotal=vsubtotal+viva;

            $('#vsubtotal').val(vsubtotal.toFixed(2));
            $('#viva').val(viva.toFixed(2));
            $('#vtotal').val(vtotal.toFixed(2));
        }
        var self = this;

        function deleteRow(row){
            vsubtotal=0,viva=0,vtotal=0
            var d = row.parentNode.parentNode.rowIndex;
            document.getElementById('tabla').deleteRow(d);
            document.getElementById('vsubtotal').value="";
            document.getElementById('viva').value="";
            document.getElementById('vtotal').value="";
        }

    </script>
@stop
