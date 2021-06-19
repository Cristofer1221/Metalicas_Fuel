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
            $table->date('infecha');
            $table->string('inciudad',80);
            $table->string('incalles',150);
            $table->longText('inindescripcion');
            $table->string('inobservacion',200);

            // $table->unsignedBigInteger('personal_id')->nullable();
            // $table->foreign('personal_id')
            //       ->references('id')
            //       ->on('personals')
            //       ->onDelete('set null');

            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('clientes')
                  ->onDelete('set null');


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
