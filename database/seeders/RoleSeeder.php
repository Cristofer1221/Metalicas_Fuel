<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //en un futuro aqui se puede agregar los permisos conforme la aplicacion cresca
        //Admin todos los permisos
        $role = Role::create(['name'=>'Admin']);
        $role-> permissions()->attach([1,2,3,4,5,6,7,8,9,10,
                                        11,12,13,14,15,16,17,18,19,20,
                                        21,22,23,24,25,26,27,28,29,30,
                                        31,32,33,34,35,36,37]);

        //gerente todos los permisos
        $role = Role::create(['name'=>'Gerente']);
        $role ->syncPermissions(['Ver dashboard',
            'Crear Role','Listar Role','Editar Role','Eliminar Role',
            'Crear Usuarios','Leer Usuarios','Editar Usuarios','Eliminar Usuarios',
            'Crear Fecha','Leer Fecha','Editar Fecha','Eliminar Fecha',
            'Crear Asistencia','Leer Asistencia','Editar Asistencia','Eliminar Asistencia',
            'Leer Asistencia Personal',
            'Crear Clientes','Leer Clientes','Editar Clientes','Eliminar Clientes',
            'Crear Instalacion','Leer Instalacion','Editar Instalacion','Eliminar Instalacion','Mostrar PDF Instalacion','Crear Nota','Guardar Nota',
            'Crear Informes','Leer Informes','Editar Informes','Eliminar Informes','Mostrar PDF Informes',
            'Leer Ventas','Eliminar Ventas','Mostrar PDF Ventas']);

        //secretaria ,Usuarios, Fecha, Asistencia,Asistencia Personal,Clientes,Instalacion,Informes
        $role = Role::create(['name'=>'Secretaria']);
        $role ->syncPermissions(['Ver dashboard',
            'Crear Usuarios','Leer Usuarios','Editar Usuarios','Eliminar Usuarios',
            'Crear Fecha','Leer Fecha','Editar Fecha','Eliminar Fecha',
            'Crear Asistencia','Leer Asistencia','Editar Asistencia','Eliminar Asistencia',
            'Leer Asistencia Personal',
            'Crear Clientes','Leer Clientes','Editar Clientes','Eliminar Clientes',
            'Crear Instalacion','Leer Instalacion','Editar Instalacion','Eliminar Instalacion','Mostrar PDF Instalacion','Crear Nota','Guardar Nota',
            'Crear Informes','Leer Informes','Editar Informes','Eliminar Informes','Mostrar PDF Informes']);

        //Contador, Notas de Venta, Asistencia Personal
        $role = Role::create(['name'=>'Contador']);
        $role ->syncPermissions(['Ver dashboard',
            'Leer Asistencia Personal',
            'Leer Ventas','Eliminar Ventas','Mostrar PDF Ventas']);

        //Tecnicos Crear Informe, Asistencia Personal, Leer Instalaciones
        $role = Role::create(['name'=>'Tecnicos']);
        $role ->syncPermissions(['Ver dashboard',
            'Crear Informes','Leer Asistencia Personal','Leer Instalacion']);

    }
}
