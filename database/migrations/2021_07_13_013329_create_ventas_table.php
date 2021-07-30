<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instalaciones_id')->constrained('instalacions');
            $table->date('vfecha');
            $table->string('vpago',20);

            $table->string('vdetalle');

            $table->decimal('vsubtotal', 10,2);
            $table->decimal('viva', 10,2);
            $table->decimal('vtotal', 10,2);
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
        Schema::dropIfExists('ventas');
    }
}
