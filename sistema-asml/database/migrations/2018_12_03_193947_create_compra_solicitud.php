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
            $table->string('fecha', 100);
            $table->string('rut', 100);
            $table->string('dv', 100);
            $table->string('nombre', 100);
            $table->string('direccion', 100);
            $table->string('comuna', 100);
            $table->string('ciudad', 100);
            $table->string('fono', 100);
            $table->string('fax', 100);
            $table->string('email', 100);
            $table->string('contacto', 100);  
            $table->string('tipo_solicitud', 100);
            $table->string('solicitante', 100);
            $table->string('jefe_autoriza', 100);
            $table->string('archivo_uno', 100);
            $table->string('archivo_dos', 100);
            $table->string('neto', 100);
            $table->string('iva', 100);
            $table->string('exento', 100);
            $table->string('monto_total', 100);
            $table->string('observaciones', 100);
            $table->string('vigente', 100);            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compra_solicitud');
    }
}
