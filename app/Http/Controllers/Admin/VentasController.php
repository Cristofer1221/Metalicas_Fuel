<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Venta;
use PDF;

class VentasController extends Controller
{
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
