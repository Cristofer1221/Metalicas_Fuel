<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informe;
use App\Models\Instalacion;
use PDF;

class InformeController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer Informes')->only('index');
        $this->middleware('can:Crear Informes')->only('create','store');
        $this->middleware('can:Editar Informes')->only('edit','update');
        $this->middleware('can:Eliminar Informes')->only('destroy');
        $this->middleware('can:Mostrar PDF Informes')->only('show');
    }

    public function index(){

        $informes=Informe::all();
        return view('admin.informes.index', compact('informes'));
    }

    public function create(){
        $instalacion=Instalacion::all();
        return view('admin.informes.create', compact('instalacion'));
    }

    public function store(Request $request){
        $request->validate([
            'ifecha'=>'required',
            'iestado'=>'required|in:Completo,Trabajos en curso,Inconcluso',
            'idescripcion'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'iobservaciones'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/'

        ],[
            'ifecha.required'=>'El campo fecha es obligatorio.',
            'idescripcion.required'=>'El campo descripción es obligatorio.',
            'idescripcion.max'=>'El campo descripción debe de tener un maximo de 150 caracteres.',
            'idescripcion.regex'=>'El campo descripción debe de contener solamente caracteres alfa numéricos.',
            'iobservaciones.required'=>'El campo observación es obligatorio.',
            'iobservaciones.max'=>'El campo observación debe de tener un maximo de 150 caracteres.',
            'iobservaciones.regex'=>'El campo observación debe de contener solamente caracteres alfa numéricos.',
        ]);

        $in = Informe::create([
            'instalaciones_id'=>$request->instalacion,
            'ifecha'=>$request->ifecha,
            'iestado'=>$request->iestado,
            'idescripcion'=>$request->idescripcion,
            'iobservaciones'=>$request->iobservaciones,

        ]);

        return redirect()->route('admin.informes.index')->with('info','El informe se creo con exito.');
    }

    public function edit(Informe $informe){
        $numero_id=$informe->id;
        $instalacion=Instalacion::find($numero_id);
        //dd($informe);
        return view('admin.informes.edit', compact('informe','instalacion'));
    }

    public function update(Request $request, Informe $informe){
        //dd($request);
        $request->validate([
            'ifecha'=>'required',
            'iestado'=>'required|in:Completo,Trabajos en curso,Inconcluso',
            'idescripcion'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'iobservaciones'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/'

        ],[
            'ifecha.required'=>'El campo fecha es obligatorio.',
            'idescripcion.required'=>'El campo descripción es obligatorio.',
            'idescripcion.max'=>'El campo descripción debe de tener un maximo de 150 caracteres.',
            'idescripcion.regex'=>'El campo descripción debe de contener solamente caracteres alfa numéricos.',
            'iobservaciones.required'=>'El campo observación es obligatorio.',
            'iobservaciones.max'=>'El campo observación debe de tener un maximo de 150 caracteres.',
            'iobservaciones.regex'=>'El campo observación debe de contener solamente caracteres alfa numéricos.',
        ]);

        $informe->update([
            'ifecha'=>$request->ifecha,
            'iestado'=>$request->iestado,
            'idescripcion'=>$request->idescripcion,
            'iobservaciones'=>$request->iobservaciones,
        ]);
        return redirect()->route('admin.informes.edit', $informe)->with('info','El informe se editó con éxito.');
    }

    public function destroy(Informe $informe){
        $informe->delete();
        return redirect()->route('admin.informes.index')->with('info','El informe se elimino con éxito.');
    }

    public function show(Informe $informe){
        $pdf=PDF::loadview('admin.informes.informepdf', compact('informe'));
        return $pdf->stream();
    }

}
