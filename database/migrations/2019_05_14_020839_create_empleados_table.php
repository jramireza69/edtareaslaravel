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
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('tipo_documento', 6)->default('CC');
            $table->string('numdocumento',30);
            $table->string('direccion');
            $table->unsignedInteger('idciudad')->default(1);
            $table->foreign('idciudad')->references('id')->on('ciudads');
            $table->string('celular');
            $table->string('telefono');
            $table->string('cargo',20)->default('MENSAJERO');
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
