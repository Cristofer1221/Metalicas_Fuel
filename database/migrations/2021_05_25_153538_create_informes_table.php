<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->id();

            $table->date('ifecha');
            $table->string('iestado',15);
            $table->longText('idescripcion');
            $table->string('iobservaciones',200);

            $table->unsignedBigInteger('instalacion_id')->nullable();

            $table->foreign('instalacion_id')
                  ->references('id')
                  ->on('instalacions')
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
        Schema::dropIfExists('informes');
    }
}
