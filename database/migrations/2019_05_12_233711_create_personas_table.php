<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_persona', 5);
            $table->string('nombre', 67);
            $table->string('tipo_documento', 12);
            $table->string('num_documento', 16);
            $table->string('telefono',51);
            $table->string('mail1', 77);
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
        Schema::dropIfExists('personas');
    }
}
