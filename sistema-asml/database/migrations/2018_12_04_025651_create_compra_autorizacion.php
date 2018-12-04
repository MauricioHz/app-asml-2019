<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraAutorizacion extends Migration
{

    public function up()
    {
        Schema::create('compra_autorizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_solicitante');
            $table->integer('solicitante');
            $table->integer('solicitud_id');
            $table->dateTime('fecha_autoriza_jefatura');
            $table->string('autoriza_jefatura');
            $table->dateTime('fecha_autoriza_finanza');
            $table->integer('autoriza_finanza');
            $table->dateTime('fecha_autoriza_gerencia');
            $table->integer('autoriza_gerencia');
            $table->integer('vigente');            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compra_autorizacion');
    }
}
