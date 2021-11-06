<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemillerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semilleros', function (Blueprint $table) {
            $table->bigIncrements('idsemillero');
            $table->string('nombre_semillero');
            $table->date('fecha_de_inicio'); 
            $table->string('objetivo');
            //$table->unsignedBigInteger('idlinea'); 
            
            $table->foreignId('idlinea')->constrained('lineas_inv'); 
            //$table->foreign ('idlinea')->references('idlinea')->on('lineas_investigacions');
            
            $table->softDeletes();
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
        Schema::dropIfExists('semilleros');
    }
}
