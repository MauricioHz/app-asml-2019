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
            $table->integer('solicitante_id');
            $table->integer('solicitud_id');            
            $table->integer('jefatura_id');
            $table->dateTime('fecha_solicitante');
            $table->dateTime('fecha_jefatura');
            $table->dateTime('fecha_finanza');
            $table->dateTime('fecha_gerencia');
            $table->integer('vigente');            
        });
    }

    public function down()
    {
        Schema::dropIfExists('compra_autorizacion');
    }
}
