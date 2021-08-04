<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('can:Listar Role')->only('index');
        $this->middleware('can:Crear Role')->only('create','store');
        $this->middleware('can:Editar Role')->only('edit','update');
        $this->middleware('can:Eliminar Role')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles =Role::all();

        return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions=Permission::all();
        return view('admin.roles.create',compact('permissions'));
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
            'name' =>'required|min:3|max:40|regex:/^[a-zA-Z\s]+$/u',
            'permissions' =>'required'
        ],[
            'name.required'=>'El campo nombre es requerido.',
            'name.min'=>'El campo nombre debe de tener minimo 3 caracteres.',
            'name.max'=>'El campo nombre debe ed tener un maximo de 40 caracteres.',
            'name.regex'=>'El campo nombre debe de contener solo caracteres alfabéticos.',
            'permissions.required' =>'El campo permisos es requerido.',
        ]);

        $role = Role::create([
            'name' =>$request->name
        ]);

        $role->permissions()->attach($request->permissions);

        return redirect()->route('admin.roles.index')->with('info','El rol se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin.roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions=Permission::all();

        return view('admin.roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' =>'required|min:3|max:40|regex:/^[a-zA-Z\s]+$/u',
            'permissions' =>'required'
        ],[
            'name.required'=>'El campo nombre es requerido.',
            'name.min'=>'El campo nombre debe de tener minimo 3 caracteres.',
            'name.max'=>'El campo nombre debe ed tener un maximo de 40 caracteres.',
            'name.regex'=>'El campo nombre debe de contener solo caracteres alfabéticos.',
            'permissions.required' =>'El campo permisos es requerido.',
        ]);

        $role->update([
            'name' => $request->name
        ]);

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit',$role)->with('info','El rol se edito con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('info','El rol se elimino con éxito');
    }
}
