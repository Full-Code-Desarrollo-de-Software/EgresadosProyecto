<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_egresos', function (Blueprint $table) {
            $table->id();
            $table->string('titulacion');
            $table->date('fecha');
            $table->string('carrera');
            $table->string('especialidad');
            $table->unsignedBigInteger('egresado_id');

            $table->foreign('egresado_id')->references('id')->on('egresados')->onDelete('cascade');

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
        Schema::dropIfExists('datos_egresos');
    }
}
