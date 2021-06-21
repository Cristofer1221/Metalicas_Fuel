<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Asistencia;


class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=20;$i++){
            for($j = 1; $j <=20;$j++){
                Asistencia::create([
                    'fecha_id'=>$i,
                    'usuarios_id'=>$j,
                    'estado'=>'1'
                    ]);
            }
        }


        //Asistencia::factory(20)->create();
    }
}
