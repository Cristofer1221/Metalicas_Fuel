<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            //la parte de datos de usuarios
            $table ->string('cedula',15)->unique();;
            $table ->date('nacimiento');
            $table ->string('estadocivil',12);
            $table ->string('direccion',150);
            $table ->string('telefono',10);
            $table ->string('celular',10);
            $table ->string('especializacion',15);
            $table->string('jornada',10);
            $table ->char('genero',5);


            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
