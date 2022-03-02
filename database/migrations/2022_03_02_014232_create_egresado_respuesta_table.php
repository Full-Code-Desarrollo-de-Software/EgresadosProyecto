<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadoRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresado_respuesta', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('egresado_id');
            $table->unsignedBigInteger('respuesta_id');

            $table->foreign('egresado_id')->references('id')->on('egresados')->onDelete('cascade');
            $table->foreign('respuesta_id')->references('id')->on('respuestas')->onDelete('cascade');


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
        Schema::dropIfExists('egresado_respuesta');
    }
}
