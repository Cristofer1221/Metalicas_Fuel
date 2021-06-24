<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained('users');
            $table->foreignId('clientes_id')->constrained('clientes');

            $table->string('intipo',35);
            $table->date('infecha');
            $table->string('estado',20);
            $table->string('inciudad',40);
            $table->string('incalles',150);
            $table->longText('inindescripcion');
            $table->string('inobservacion',150);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instalacions');
    }
}
