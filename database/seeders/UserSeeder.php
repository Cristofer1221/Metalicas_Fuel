<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=user::create([
                'name'=>'Cristofer Lopez',
                'email'=>'s@c.com',
                'password'=>bcrypt('1'),
                'cedula'=>'1701767496',
                'nacimiento'=>'2001-05-05',
                'estadocivil'=>'soltero',
                'direccion'=>'de las rosas y lirios',
                'telefono'=>'3428012',
                'celular'=>'0969399661',
                'especializacion'=>'industrial',
                'jornada'=>'completa',
                'genero'=>'M',

                ]);
            //bcrypt para encriptar las contraseñas
        $user->assignRole('Admin');

        User::factory(20)->create();

    }
}
