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
        $role = Role::create(['name'=>'Admin']);
        $role-> permissions()->attach([1,2,3,4,5,6,7,8,9]);

        //otra manera de relacionar los permisos
        $role = Role::create(['name'=>'Gerente']);
        $role ->syncPermissions(['Crear Role','Listar Role','Editar Role','Eliminar Role','Crear Usuarios','Leer Usuarios','Editar Usuarios','Eliminar Usuarios']);

        // Role::create(['name'=>'Personal_Administrativo']);
        // Role::create(['name'=>'Tecnico']);




    }
}
