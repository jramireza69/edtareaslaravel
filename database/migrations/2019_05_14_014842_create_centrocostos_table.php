<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrocostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centrocostos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idempresa')->nullable();
            $table->foreign('idempresa')->references('id')->on('empresas');
            $table->string('nombrecc', 30);
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
        Schema::dropIfExists('centrocostos');
    }
}
