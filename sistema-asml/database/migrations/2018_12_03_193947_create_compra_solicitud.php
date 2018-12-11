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
            $table->string('dv', 1);
            $table->string('nombre', 100);
            $table->string('direccion', 100)->nullable();
            $table->string('comuna', 100);
            $table->string('ciudad', 100);
            $table->string('fono', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('contacto', 100)->nullable();
            $table->integer('tipo_proveedor');
            $table->integer('tipo_solicitud');
            $table->integer('solicitante_id');
            $table->integer('jefatura_id');
            $table->integer('estado_jefatura')->default(0);
            $table->integer('estado_finanzas')->default(0);
            $table->integer('estado_gerencia')->default(0);
            $table->string('archivo_uno', 100)->nullable();
            $table->string('archivo_dos', 100)->nullable();
            $table->decimal('neto', 16, 2);
            $table->decimal('iva', 16, 2);
            $table->decimal('exento', 16, 2)->default(0);
            $table->decimal('monto_total', 16, 2);
            $table->string('observaciones', 100)->nullable();
            $table->integer('leido')->default(0);
            $table->integer('vigente')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compra_solicitud');
    }
}
