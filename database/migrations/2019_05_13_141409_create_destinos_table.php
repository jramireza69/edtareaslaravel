<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idpersona');
            $table->foreign('idpersona')->references('id')->on('personas');
            $table->string('ndestino');
            $table->string('direccion');
            $table->unsignedInteger('idciudad');
            $table->foreign('idciudad')->references('id')->on('ciudads');
            $table->string('telefono',50);
            $table->string('observacion',100);
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
        Schema::dropIfExists('destinos');
    }
}
