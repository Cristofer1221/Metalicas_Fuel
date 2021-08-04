<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer Clientes')->only('index');
        $this->middleware('can:Crear Clientes')->only('create','store');
        $this->middleware('can:Editar Clientes')->only('edit','update');
        $this->middleware('can:Eliminar Clientes')->only('destroy');
    }

    //
    public function index(){

        return view('admin.clientes.index');
    }

    public function create(){
        $clientes =Cliente::all();
        return view('admin.clientes.create',compact('clientes'));
    }

    public function store(Request $request){
        $request->validate([
            'cnombre' =>'required|min:3|alpha',
            'capellido'=>'required|min:3|alpha',
            'cemail' =>'required|email:rfc,dns',
            'ccedula'=>'required|size:10',
            'ccelular'=>'required|min:10|max:10',

        ],[
            'cnombre.required'=>'El campo nombre es obligatorio.',
            'cnombre.alpha'=>'El campo nombre solo debe contener letras.',
            'cnombre.min'=>'El campo nombre debe de tener mas de 3 caracteres.',

            'capellido.required'=>'El campo apellido es obligatorio.',
            'capellido.alpha'=>'El campo apellido solo debe contener letras.',
            'capellido.min'=>'El campo apellido debe de tener mas de 3 caracteres.',

            'cemail.required'=>'El campo correo es obligatorio.',

            'ccedula.required'=>'El campo cédula es obligatorio.',
            'ccedula.size'=>'El campo cédula debe de tener 10 digitos.',
            'ccelular.required'=>'El campo celular es obligatorio.',
            'ccelular.min'=>'El campo celular debe tener 10 caracteres.',
            'ccelular.max'=>'El campo celular debe tener 10 caracteres.',
        ]);
        $clientes=Cliente::create([
            'cnombre'=>$request->cnombre,
            'capellido'=>$request->capellido,
            'cemail'=>$request->cemail,
            'ccedula'=>$request->ccedula,
            'ccelular'=>$request->ccelular,
        ]);

        return redirect()->route('admin.clientes.index')->with('info','El cliente se creo satisfactoriamente');

    }

    public function edit(Cliente $cliente){
        return view('admin.clientes.edit', compact('cliente'));
    }

    public function update(Request $request,Cliente $cliente){
        $request->validate([
            'cnombre' =>'required|min:3|alpha',
            'capellido'=>'required|min:3|alpha',
            'cemail' =>'required|email:rfc,dns',
            'ccedula'=>'required|size:10',
            'ccelular'=>'required|min:10|max:10',

        ],[
            'cnombre.required'=>'El campo nombre es obligatorio.',
            'cnombre.alpha'=>'El campo nombre solo debe contener letras.',
            'cnombre.min'=>'El campo nombre debe de tener mas de 3 caracteres.',

            'capellido.required'=>'El campo apellido es obligatorio.',
            'capellido.alpha'=>'El campo apellido solo debe contener letras.',
            'capellido.min'=>'El campo apellido debe de tener mas de 3 caracteres.',

            'cemail.required'=>'El campo correo es obligatorio.',

            'ccedula.required'=>'El campo cédula es obligatorio.',
            'ccedula.size'=>'El campo cédula debe de tener 10 digitos.',
            'ccelular.required'=>'El campo celular es obligatorio.',
            'ccelular.min'=>'El campo celular debe tener 10 caracteres.',
            'ccelular.max'=>'El campo celular debe tener 10 caracteres.',
        ]);
        $cliente->update([
            'cnombre'=>$request->cnombre,
            'capellido'=>$request->capellido,
            'cemail'=>$request->cemail,
            'ccedula'=>$request->ccedula,
            'ccelular'=>$request->ccelular,

        ]);
        return redirect()->route('admin.clientes.edit', $cliente)->with('info','El cliente se editó con éxito.');

    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('admin.clientes.index')->with('info','El usuario se elimino con éxito.');
    }





}
