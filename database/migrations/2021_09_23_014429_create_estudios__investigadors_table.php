<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosInvestigadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios__investigadors', function (Blueprint $table) {
            $table->bigIncrements('idEstudiosInvest');
            $table->string('Titulo_obtenido');
            $table->date('fecha_inicio');
            $table->date('fecha_graduacion');

            $table->unsignedBigInteger('idinv');
            $table->unsignedBigInteger('idEstudios');
            $table->unsignedBigInteger('idDatosInstitucion');
        
            $table->foreign ('idinv')->references('idinv')->on('investigadores');
            $table->foreign ('idEstudios')->references('idEstudios')->on('estudios');
            $table->foreign ('idDatosInstitucion')->references('idDatosInstitucion')->on('datos__institucions');

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
        Schema::dropIfExists('estudios__investigadors');
    }
}
