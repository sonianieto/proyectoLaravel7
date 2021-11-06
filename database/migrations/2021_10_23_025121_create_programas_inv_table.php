<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasInvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas_inv', function (Blueprint $table) {
            $table->bigIncrements('idprograma');
            $table->string('codigoprograma')->unique();
            $table->string('nombre_programa');
            $table->date('fecha_de_inicio');
            $table->date('fecha_de_fin');
            $table->string('objetivo');
            $table->string('resumen');

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
        Schema::dropIfExists('programas_inv');
    }
}
