<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos__institucions', function (Blueprint $table) {
            $table->bigIncrements('idDatosInstitucion');
            $table->string('nombre_institucion');
            $table->string('direccion');
            $table->string('sede');
            $table->unsignedBigInteger('idpais'); 
            $table->unsignedBigInteger('idContacto'); 
            $table->string('telefono_institucion');
            $table->string('email_institucion')->unique();

            $table->foreign ('idpais')->references('idpais')->on('pais');
            $table->foreign ('idContacto')->references('idContacto')->on('contactos');
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
        Schema::dropIfExists('datos__institucions');
    }
}
