<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraProveedorFormaPagoTable extends Migration
{
    public function up(){
        Schema::create('compra_proveedor_forma_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('compra_proveedor_forma_pago');
    }
}
