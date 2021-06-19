<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Asistencia;
use App\Models\Personal;

class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Asistencia::create([
            'user_id'=>'1',
            'afecha'=>'2021-05-05',
            'estado'=>'Presente',
        ]);

        Asistencia::factory(20)->create();
    }
}
