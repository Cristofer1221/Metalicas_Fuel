<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ConteoController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer Asistencia Personal')->only('index');
    }

    public function index(Asistencia $asistencia,User $user){
        $user = auth()->user(); //datos de usuario para presentar
        $id_user=auth()->id(); //1

        $presentes_1 = DB::table('asistencias')
        ->where('usuarios_id','=',$id_user)
        ->where('estado','=',1)
        ->count(); //numero de asistencias en presentes

        $ausentes_0 = DB::table('asistencias')
        ->where('usuarios_id','=',$id_user)
        ->where('estado','=',0)
        ->count(); //numero de asistencia en ausentes

        $atotales=Asistencia::with('asistencias')->where('usuarios_id',$id_user)->count();//#numero de asistencias totales

        //dd($datos_asis_1);

        return view('admin.asistencias.conteo',compact('user','atotales','presentes_1','ausentes_0'));
    }
}
