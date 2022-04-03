<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganismosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organismos', function (Blueprint $table) {
            $table->id();
            $table->string('sector_prim');
            $table->string('Sector_sec');
            $table->string('Sector_terc');
            $table->string('Sector');
            $table->string('tamaño');
            $table->string('actividad');
            $table->string('razon');
            $table->string('telefono');
            $table->string('pagina');
            $table->string('jefe');
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
        Schema::dropIfExists('organismos');
    }
}
