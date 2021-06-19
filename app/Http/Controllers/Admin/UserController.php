<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('admin.users.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|min:4|alpha',
            'email' =>'required|email:rfc,dns',
            'password' =>'required|confirmed|min:6|alpha_num',
            'cedula'=>'required|size:10',
            'nacimiento'=>'required|date',
            'estadocivil'=>'required|in:solter@,casad@,divorciad@,viud@,unión libre,unión de hecho,otros',
            'direccion'=>'required|alpha_dash|max:150',
            'telefono'=>'required|min:7|max:10',
            'celular'=>'required|min:10|max:10',
            'especializacion'=>'required|in:Tec. Artesanal,Tec. Industrial,Administrativ@',
            'genero'=>'required|in:M,F,Otros'
        ],[
            'name.required'=>'El campo nombre es obligatorio.',
            'name.alpha'=>'El campo nombre solo debe contener letras.',
            'name.min'=>'El campo nombre debe de tener mas de 4 caracteres.',
            'email.required'=>'El campo correo es obligatorio.',
            'cedula.required'=>'El campo cédula es obligatorio.',
            'cedula.size'=>'El campo cédula debe de tener 10 digitos.',
            'password.required'=>'Se necesita una contraseña.',
            'password.min'=>'Se necesita al menos 6 caracteres alfa-numéricos en la constraseña.',
            'password.confirmed'=>'Se necesita confirmar su contraseña.',
            'nacimiento.required'=>'El campo fecha de nacimiento es obligatorio.',
            'direccion.required'=>'El campo dirección es obligatorio.',
            'telefono.required'=>'El campo teléfono convencional es obligatorio.',
            'telefono.min'=>'El campo teléfono convencional debe de tener minimo 7 caracteres.',
            'telefono.max'=>'El campo teléfono convencional debe de tener maximo 10 caracteres.',
            'celular.required'=>'El campo celular es obligatorio.',
            'celular.min'=>'El campo celular debe tener 10 caracteres.',
            'celular.max'=>'El campo celular debe tener 10 caracteres.',

        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' =>bcrypt($request->password),
            'cedula'=>$request->cedula,
            'nacimiento'=>$request->nacimiento,
            'estadocivil'=>$request->estadocivil,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'celular'=>$request->celular,
            'especializacion'=>$request->especializacion,
            'jornada'=>$request->jornada,
            'genero'=>$request->genero
        ]);

        return redirect()->route('admin.users.index')->with('info','El usuario se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles=Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // return $request->all();
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'cedula'=>$request->cedula,
            'nacimiento' =>$request->nacimiento,
            'estadocivil'=>$request->estadocivil,
            'direccion'=>$request->direccion,
            'telefono' =>$request->telefono,
            'celular' =>$request->celular,
            'especializacion' =>$request->especializacion,
            'jornada'=>$request->jornada,
            'genero' =>$request->genero
        ]);

        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('info','El usuario se edito con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info','El usuario se elimino con éxito.');
    }

}
