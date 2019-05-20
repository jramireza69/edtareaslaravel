<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipoc_id')->default( \App\TipoCliente::MENUDEO);
            $table->foreign('tipoc_id')->references('id')->on('tipo_clientes');
            $table->string('nombre', 67);
            $table->string('tipo_documento', 6)->default('NIT');
            $table->string('num_documento', 10)->unique();
            $table->string('celular',10);
            $table->string('telefono',7);
            $table->string('email', 77);
            $table->integer('idgerente');
            $table->integer('idparametros');
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
        Schema::dropIfExists('empresas');
    }
}
