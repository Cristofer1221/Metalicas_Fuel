<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\User;
use App\Models\Fecha;


class AsistenciaController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer Asistencia')->only('index');
        $this->middleware('can:Crear Asistencia')->only('create','store');
        $this->middleware('can:Editar Asistencia')->only('edit','update');
        $this->middleware('can:Eliminar Asistencia')->only('destroy');
    }


    public function index(){
        //$asistencias=Asistencia::all();
        $asistencia = new Asistencia();
        $asistencias=$asistencia->asistencia_completa();

        //dd($asistencias);
        return view('admin.asistencias.index',compact('asistencias'));
    }

    public function create(){

        $datos_usuarios =User::all();
        $fechas = Fecha::all();

        return view('admin.asistencias.create',compact('datos_usuarios','fechas'))->with('info','La asistencia se creo con éxito.');

    }

    public function store(Request $request){
        //dd($request);
        $request->validate([
            'presente'=>'required',
        ],
        [
            'presente.required'=>'El campo asistencia es obligatorio.'
        ]
        );

        $datos_usuarios =User::all();
        foreach($datos_usuarios as $usuario){
            $asistencia = new Asistencia();
            $asistencia->fecha_id=$request->fecha;
            $asistencia->usuarios_id=$usuario->id;

            if(in_array($usuario->id,$request->presente)){
                $asistencia->estado=true;
            }
            else{
                $asistencia->estado=false;
            }
            $asistencia->save();
        }

        return redirect()->route('admin.asistencias.index')->with('info','La asistencia se guardo con exito.');

    }

    public function edit(Asistencia $asistencia){
        $numero_id=$asistencia->id; //recuperar el id de asistencia

        $asis = new Asistencia();
        $asistencias_completas=$asis->asistencia_completa()->find($numero_id); //obtener todo el arrary para editar la info

        return view('admin.asistencias.edit',compact('asistencias_completas','asistencia'));
    }




    public function update(Request $request,Asistencia $asistencia){
        //dd($asistencia);
        if($request->presente==null){
            $asistencia->estado=false;
        }
        else{
            if(in_array($asistencia->id,$request->presente)){
                $asistencia->estado=true;
            }
            else{
                $asistencia->estado=false;
            }
        }
        $asistencia->save();

        return redirect()->route('admin.asistencias.edit',$asistencia)->with('info','La asistencia se edito con éxito.');
    }

    public function destroy(Asistencia $asistencia){
        $asistencia->delete();
        return redirect()->route('admin.asistencias.index')->with('info','La asistencia se eliminó con exito');
    }

}
