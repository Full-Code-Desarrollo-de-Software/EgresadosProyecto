<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            
            $table->string('muncipio');
            $table->string('calle');
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('numero');
            $table->unsignedBigInteger('egresado_id')->nullable('true');
            $table->unsignedBigInteger('organismo_id')->nullable('true');

            $table->foreign('organismo_id')->references('id')->on('organismos');
            $table->foreign('egresado_id')->references('id')->on('egresados');
            
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
        Schema::dropIfExists('domicilios');
    }
}
