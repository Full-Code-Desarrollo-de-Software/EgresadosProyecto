<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('tel_paterno');
            $table->string('n_control');
            $table->string('fecha_Nacimiento');
            $table->string('telefono');
            $table->integer('ingles');
            $table->integer('OtroIdioma');
            $table->integer('validado');
            $table->unsignedBigInteger('user_id');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('egresados');
    }
}
