<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigadores', function (Blueprint $table) {
            $table->bigIncrements('idinv');
            $table->string('ccInvest')->unique();
            $table->unsignedBigInteger('idtipoDoc');
            $table->string('nombre_completo');
            $table->string('genero');
            $table->string('estado_civil');
            $table->date('fecha_de_nacimiento');
            $table->unsignedBigInteger('idpais'); 
            $table->string('direccion');
            $table->string('telefono_celular');
            $table->string('email_personal')->unique();
            $table->unsignedBigInteger('idestado_inv'); 
            $table->unsignedBigInteger('idclasificacion_inv');
            $table->string('codigo_orcid');
            $table->integer('H5');
            $table->string('url_google_scholar');
            $table->string('autor_id_scopus')->nullable();
            $table->string('researchgate')->nullable();
            $table->string('researcherid')->nullable();
            $table->string('url_cvlac');
            $table->string('tutor')->defaul('No');
            
            $table->foreign ('idtipoDoc')->references('idtipoDoc')->on('tipo_docs');
            $table->foreign ('idpais')->references('idpais')->on('pais');
            $table->foreign ('idestado_inv')->references('idestado_inv')->on('estado_investigadors');
            $table->foreign ('idclasificacion_inv')->references('idclasificacion_inv')->on('clasificacion_invs');
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
        Schema::dropIfExists('investigadores');
    }
}
