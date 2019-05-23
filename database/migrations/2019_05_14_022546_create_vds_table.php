<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idcliente');
            $table->foreign('idcliente')->references('id')->on('clientes');
            $table->unsignedInteger('idcentro_costos')->default(1);
            $table->foreign('idcentro_costos')->references('id')->on('centrocostos');
            $table->unsignedInteger('idarticulo');
            $table->foreign('idarticulo')->references('id')->on('articulos');
            $table->unsignedInteger('iddestino');
            $table->foreign('iddestino')->references('id')->on('destinos');
            $table->unsignedInteger('idempleado');
            $table->foreign('idempleado')->references('id')->on('empleados');
            $table->string('observacion',230);
            $table->enum('condicion', [
               \App\Vd::PENDIENTE, \App\Vd::INICIADO, \App\Vd::COMPLETADO
            ])->default(\App\Vd::PENDIENTE);
            $table->boolean('previous_approved')->default(false);
            $table->boolean('previous_rejected')->default(false);
            $table->dateTime('fecha1')->nullable();
            $table->dateTime('fecha2')->nullable();
            $table->string('observacion1',230)->nullable();
            $table->boolean('respuesta')->default(false);
            $table->string('prueba',60)->nullable();
            $table->integer('cantidad')->default(1);
            $table->boolean('otrosrubros')->default(false);
            $table->integer('jornada')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vds');
    }
}
