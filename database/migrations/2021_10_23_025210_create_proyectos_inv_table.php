<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosInvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_inv', function (Blueprint $table) {
            $table->id('idproyecto');
            $table->string('codigoproyecto')->unique();
            $table->string('nombre_proyecto');
            $table->date('fecha_de_inicio');
            $table->date('fecha_de_fin');
            $table->string('objetivo');
            $table->string('resumen');
            $table->unsignedBigInteger('idprograma'); 
            $table->unsignedBigInteger('idsemillero'); 
            
            //$table->foreignId('idprograma')->constrained('programas_inv');
           // $table->foreignId('idsemillero')->constrained('semilleros');
            $table->foreign ('idprograma')->references('idprograma')->on('programas_inv');
            $table->foreign ('idsemillero')->references('idsemillero')->on('semilleros');
            
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
        Schema::dropIfExists('proyectos_inv');
    }
}
