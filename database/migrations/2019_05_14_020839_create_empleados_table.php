<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idusuario');
            $table->foreign('idusuario')->references('id')->on('users');
            $table->unsignedInteger('idpersona');
            $table->foreign('idpersona')->references('id')->on('personas');
            $table->string('tipodocumento');
            $table->string('numdocumento',30);
            $table->string('direccion');
            $table->string('celular');
            $table->string('telefono');
            $table->string('cargo',20);
            $table->string('observacion');
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
        Schema::dropIfExists('empleados');
    }
}
