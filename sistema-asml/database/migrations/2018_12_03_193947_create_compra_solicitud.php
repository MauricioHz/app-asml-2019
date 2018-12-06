<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraSolicitud extends Migration
{

    public function up()
    {
        Schema::create('compra_solicitud', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->integer('rut');
            $table->string('dv');
            $table->string('nombre', 100);
            $table->string('direccion', 100);
            $table->string('comuna', 100);
            $table->string('ciudad', 100);
            $table->string('fono', 100);
            $table->string('fax', 100);
            $table->string('email', 100);
            $table->string('contacto', 100);  
            $table->integer('tipo_solicitud_id');
            $table->integer('solicitante');
            $table->integer('jefe_autoriza');
            $table->string('archivo_uno', 100);
            $table->string('archivo_dos', 100);
            $table->decimal('neto', 16, 2);
            $table->decimal('iva', 16, 2);
            $table->decimal('exento', 16, 2);
            $table->decimal('monto_total', 16, 2);
            $table->string('observaciones', 100);
            $table->integer('tipo_proveedor');
            $table->integer('vigente');            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compra_solicitud');
    }
}
