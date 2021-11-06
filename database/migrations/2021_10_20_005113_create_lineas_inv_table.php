<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineasInvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_inv', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_linea');
            $table->string('programa_formacion');
            $table->date('fecha_de_creacion');
            $table->string('resumen_linea');
            $table->string('objetivo_linea');
            $table->string('enfasis_linea');
            $table->string('tesis_linea');
            //$table->unsignedBigInteger('grupo_id'); 
            $table->foreignId('idgrupo')->constrained('grupos_inv'); 
           // $table->foreign ('grupo_id')->references('grupo_id')->on('grupos_investigacions');
            //$table->softDeletes();
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
        Schema::dropIfExists('lineas_inv');
    }
}
