<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Instalacion;
use App\Models\Venta;
use PDF;

class InstalacionController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer Instalacion')->only('index');
        $this->middleware('can:Crear Instalacion')->only('create','store');
        $this->middleware('can:Editar Instalacion')->only('edit','update');
        $this->middleware('can:Eliminar Instalacion')->only('destroy');
        $this->middleware('can:Mostrar PDF Instalacion')->only('show');
    }

    public function index(){
        $instalaciones=Instalacion::all();
        //dd($insta);
        return view('admin.instalaciones.index',compact('instalaciones'));
    }

    public function create(){

        $dat_usu=User::all();
        $dat_cli=Cliente::all();

        return view('admin.instalaciones.create',compact('dat_usu','dat_cli'));
    }

    public function store(Request $request){
        //dd($request);
        $request->validate([
            'infecha'=>'required',
            'inciudad'=>'required|min:3|max:20|regex:/^[a-zA-Z\s]+$/u',
            'incalles'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'inindescripcion'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'inobservacion'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ],[
            'infecha.required'=>'El campo fecha es obligatorio.',
            'inciudad.required'=>'El campo ciudad es obligatorio.',
            'inciudad.min'=>'El campo ciudad debe tener minimo 3 caracteres',
            'inciudad.max'=>'El campo ciudad debe de tener maximo 20 caracteres',
            'inciudad.regex'=>'El campo ciudad debe de contener solamente letras',
            'incalles.required'=>'El campo calles es obligatorio.',
            'incalles.max'=>'El campo calles debe de tener un máximo de 150 caracteres.',
            'incalles.regex'=>'El campo calles debe de contener solamente caracteres alfa numéricos.',
            'inindescripcion.required'=>'El campo descripción es obligatorio.',
            'inindescripcion.max'=>'El campo descripción debe de tener un maximo de 150 caracteres.',
            'inindescripcion.regex'=>'El campo descripción debe de contener solamente caracteres alfa numéricos.',
            'inobservacion.required'=>'El campo observaciones es obligatorio.',
            'inobservacion.max'=>'El campo observaciones debe de tener un maximo de 150 caracteres.',
            'inobservacion.regex'=>'El campo observaciones debe de contener solamente caracteres alfa numéricos.',
        ]);

       $insta=Instalacion::create([
        'usuarios_id'=>$request->dat_usu,
        'clientes_id'=>$request->dat_cli,
        'intipo' =>$request->intipo,
        'infecha'=>$request->infecha,
        'estado'=>$request->estado,
        'inciudad'=>$request->inciudad,
        'incalles'=>$request->incalles,
        'inindescripcion'=>$request->inindescripcion,
        'inobservacion'=>$request->inobservacion,
       ]);

       return redirect()->route('admin.instalaciones.index')->with('info','La instalación se creo satisfactoriamente.');
    }

    public function edit(Instalacion $instalacione){
        $numero_id=$instalacione->id;
        //dd($numero_id);
        $dat_usu=User::find($numero_id);
        $dat_cli=Cliente::find($numero_id);
        //dd($dat_usu);

        return view('admin.instalaciones.edit',compact('instalacione','dat_usu','dat_cli'));
    }

    public function update(Request $request,Instalacion $instalacione){
        //dd($request);
        $request->validate([
            'infecha'=>'required',
            'inciudad'=>'required|min:3|max:20|regex:/^[a-zA-Z\s]+$/u',
            'incalles'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'inindescripcion'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'inobservacion'=>'required|max:150|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ],[
            'infecha.required'=>'El campo fecha es obligatorio.',
            'inciudad.required'=>'El campo ciudad es obligatorio.',
            'inciudad.min'=>'El campo ciudad debe tener minimo 3 caracteres',
            'inciudad.max'=>'El campo ciudad debe de tener maximo 20 caracteres',
            'inciudad.regex'=>'El campo ciudad debe de contener solamente letras',
            'incalles.required'=>'El campo calles es obligatorio.',
            'incalles.max'=>'El campo calles debe de tener un máximo de 150 caracteres.',
            'incalles.regex'=>'El campo calles debe de contener solamente caracteres alfa numéricos.',
            'inindescripcion.required'=>'El campo descripción es obligatorio.',
            'inindescripcion.max'=>'El campo descripción debe de tener un maximo de 150 caracteres.',
            'inindescripcion.regex'=>'El campo observaciones debe de contener solamente caracteres alfa numéricos.',
            'inobservacion.required'=>'El campo observaciones es obligatorio.',
            'inobservacion.max'=>'El campo observaciones debe de tener un maximo de 150 caracteres.',
            'inobservacion.regex'=>'El campo observaciones debe de contener solamente caracteres alfa numéricos.',
        ]);

        $instalacione->update([
            'intipo' =>$request->intipo,
            'infecha'=>$request->infecha,
            'estado'=>$request->estado,
            'inciudad'=>$request->inciudad,
            'incalles'=>$request->incalles,
            'inindescripcion'=>$request->inindescripcion,
            'inobservacion'=>$request->inobservacion,
        ]);
        return redirect()->route('admin.instalaciones.edit', $instalacione)->with('info','La instalación se editó con éxito.');
    }

    public function destroy(Instalacion $instalacione)
    {
        $instalacione->delete();
        return redirect()->route('admin.instalaciones.index')->with('info','La instalación se eliminó con éxito.');
    }

    public function show(Instalacion $instalacione){
        //dd($instalacione);
         $pdf=PDF::loadview('admin.instalaciones.descargapdf', compact('instalacione'));
        //return $pdf->download('hojad_de_trabajo.pdf');
        //return view('admin.instalaciones.descargapdf', compact('instalacione'));
        return $pdf->stream();
    }

    public function nota($instalacion){
        //dd($instalacion);

        $insta = Instalacion::find($instalacion);
        $cliente = Cliente::find($insta->cliente->id);
        //dd($cliente);



        return view('admin.instalaciones.nota' )->with('cliente',$cliente)->with('id_instalacion',$instalacion);
    }

    public function guardarnotas(Request $request){
        //dd($request);
        $request->validate([
            'vfecha'=>'required',
            'vpago'=>'required',

            'vsubtotal'=>'required',
            'viva'=>'required',
            'vtotal' =>'required'
        ],[
            'vfecha.required'=>'El campo fecha es obligatorio.',
            'vpago.required'=>'El campo pago es obligatorio.',
            'vsubtotal.required'=>'Se necesita el campo subtotal.',
            'viva.required'=>'Se necesita el campo I.V.A.',
            'vtotal.required'=>'Se necesita el campo total.',
        ]);

        $not=Venta::create([
            'instalaciones_id'=>$request->cliente_id,
            'vfecha'=>$request->vfecha,
            'vpago' =>$request->vpago,
            'vdetalle'=>$request->detalle,
            'vsubtotal'=>$request->vsubtotal,
            'viva'=>$request->viva,
            'vtotal'=>$request->vtotal,
        ]);
        return redirect()->route('admin.instalaciones.index')->with('info','La nota de venta se creó con éxito.');
    }


}
