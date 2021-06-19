<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aqui se crean los permisos de la aplicacion conforme crescan
        // Permission::create([
        //     'name'=>'crear @'
        // ]);
        // Permission::create([
        //     'name'=>'Leer @'
        // ]);
        // Permission::create([
        //     'name'=>'Actualizar @'
        // ]);
        // Permission::create([
        //     'name'=>'Eliminar @'
        // ]);
        Permission::create([
            'name'=>'Ver dashboard'
        ]);
        Permission::create([
            'name'=>'Crear Role'
        ]);
        Permission::create([
            'name'=>'Listar Role'
        ]);
        Permission::create([
            'name'=>'Editar Role'
        ]);
        Permission::create([
            'name'=>'Eliminar Role'
        ]);
        Permission::create([
            'name'=>'Crear Usuarios'
        ]);
        Permission::create([
            'name'=>'Leer Usuarios'
        ]);
        Permission::create([
            'name'=>'Editar Usuarios'
        ]);
        Permission::create([
            'name'=>'Eliminar Usuarios'
        ]);


    }
}
