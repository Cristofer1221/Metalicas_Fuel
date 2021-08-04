<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Venta;
use PDF;

class VentasController extends Controller
{

    public function __construct(){
        $this->middleware('can:Leer Ventas')->only('index');
        $this->middleware('can:Eliminar Ventas')->only('destroy');
        $this->middleware('can:Mostrar PDF Ventas')->only('show');
    }

    public function index(){
        $ventas=Venta::all();

        return view('admin.ventas.index', compact('ventas'));
    }

    public function destroy(Venta $venta){
        $venta->delete();
        return redirect()->route('admin.ventas.index')->with('info','La nota de venta se eliminó con éxito.');

    }

    public function show(Venta $venta){
        //dd($venta);
        $pdf=PDF::loadview('admin.ventas.descargarpdf', compact('venta'));
        return $pdf->stream();
    }

}
