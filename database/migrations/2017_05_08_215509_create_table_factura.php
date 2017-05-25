<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_factura');
            $table->string('numero_registro');
            $table->string('empleado');
            $table->string('cliente');
            $table->string('placa_vehiculo');
            $table->string('hora_ingreso');
            $table->string('hora_salida');
            $table->string('tarifa');
            $table->string('subtotal');
            $table->string('impuesto');
            $table->string('total');
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
        Schema::dropIfExists('invoices');
    }
}
