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
        //dashboard 1
        Permission::create([
            'name'=>'Ver dashboard'
        ]);

        //Roles 2,3,4,5
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

        //Usuarios 6,7,8,9
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

        //Fecha Asistencia ,10,11,12,13
        Permission::create([
            'name'=>'Crear Fecha'
        ]);
        Permission::create([
            'name'=>'Leer Fecha'
        ]);
        Permission::create([
            'name'=>'Editar Fecha'
        ]);
        Permission::create([
            'name'=>'Eliminar Fecha'
        ]);

        //Asistencia 14,15,16,17
        Permission::create([
            'name'=>'Crear Asistencia'
        ]);
        Permission::create([
            'name'=>'Leer Asistencia'
        ]);
        Permission::create([
            'name'=>'Editar Asistencia'
        ]);
        Permission::create([
            'name'=>'Eliminar Asistencia'
        ]);

        //Asistencia Personal 18
        Permission::create([
            'name'=>'Leer Asistencia Personal'
        ]);

        //Clientes 19,20,21,22
        Permission::create([
            'name'=>'Crear Clientes'
        ]);
        Permission::create([
            'name'=>'Leer Clientes'
        ]);
        Permission::create([
            'name'=>'Editar Clientes'
        ]);
        Permission::create([
            'name'=>'Eliminar Clientes'
        ]);

        //Instalacion 23 - 29
        Permission::create([
            'name'=>'Crear Instalacion'
        ]);
        Permission::create([
            'name'=>'Leer Instalacion'
        ]);
        Permission::create([
            'name'=>'Editar Instalacion'
        ]);
        Permission::create([
            'name'=>'Eliminar Instalacion'
        ]);
        Permission::create([
            'name'=>'Mostrar PDF Instalacion'
        ]);
        Permission::create([
            'name'=>'Crear Nota'
        ]);
        Permission::create([
            'name'=>'Guardar Nota'
        ]);

        //informes 30, 34
        Permission::create([
            'name'=>'Crear Informes'
        ]);
        Permission::create([
            'name'=>'Leer Informes'
        ]);
        Permission::create([
            'name'=>'Editar Informes'
        ]);
        Permission::create([
            'name'=>'Eliminar Informes'
        ]);
        Permission::create([
            'name'=>'Mostrar PDF Informes'
        ]);

        //Ventas 35,36,37
        Permission::create([
            'name'=>'Leer Ventas'
        ]);
        Permission::create([
            'name'=>'Eliminar Ventas'
        ]);
        Permission::create([
            'name'=>'Mostrar PDF Ventas'
        ]);


    }
}
