<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rut');
            $table->string('razon_social', 100);
            $table->string('nombre_comercial', 100);
            $table->string('direccion', 100)->nullable();
            $table->string('ciudad', 50)->nullable();
            $table->string('comuna', 50)->nullable();
            $table->string('giro', 100)->nullable();
            $table->string('fono', 30)->nullable();
            $table->string('fax', 30)->nullable();
            $table->string('email_sii', 100)->nullable();
            $table->string('contacto', 100)->nullable();
            $table->string('email_contacto', 100)->nullable();
            $table->string('sitio_web', 100)->nullable();
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
        Schema::dropIfExists('compra_proveedor');
    }
}
