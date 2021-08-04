<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fecha;
use App\Models\User;

class FechaController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer Fecha')->only('index');
        $this->middleware('can:Crear Fecha')->only('create','store');
        $this->middleware('can:Editar Fecha')->only('edit','update');
        $this->middleware('can:Eliminar Fecha')->only('destroy');
    }

    //
    public function index(){

        $fechas=Fecha::all();
        return view('admin.fechas.index',compact('fechas'));
    }

    public function create(){
        return view('admin.fechas.create');
    }

    public function store(Request $request){
        $request->validate([
                 'fecha_trabajo'=>'required',
        ]);

        //$user=User::findOrFail(auth()->user()->id);
        $fechas=Fecha::create([
            'fecha_trabajo'=>$request->fecha_trabajo
        ]);

        return redirect()->route('admin.fechas.index')->with('info','La fecha se creo con éxito.');
    }

    public function edit(Fecha $fecha){
        //dd($fecha);
        return view('admin.fechas.edit',compact('fecha'));
    }

    public function update(Request $request,Fecha $fecha){
        //dd($fecha);
        $fecha->update([
            'fecha_trabajo'=>$request->fecha_trabajo
        ]);
        return redirect()->route('admin.fechas.edit',$fecha)->with('info','La fecha se edito con éxito.');
    }

    public function destroy(Fecha $fecha){
        $fecha->asistencia()->delete();
        $fecha->delete();
        return redirect()->route('admin.fechas.index')->with('info','La fecha se eliminó con éxito.');
    }

}
