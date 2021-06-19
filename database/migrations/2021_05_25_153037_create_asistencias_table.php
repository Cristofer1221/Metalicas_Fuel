<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id')->unsigned();
             $table->foreignId('fecha_id')->constrained('fechas');
             $table->foreignId('usuarios_id')->constrained('users');

             $table->Boolean('estado')->unsigned()->nullable();

             //ralcion de los id's de uno a muchos con usuarios -> es la variable de los empleado utilizados -> user_id
            // $table->date('afecha');

            // $table->String('estado',8);




            $table->timestamps();




            // $table->unsignedBigInteger('personal_id');
            // $table->foreign('personal_id')->references('id')->users();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
