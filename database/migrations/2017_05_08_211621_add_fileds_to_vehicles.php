<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFiledsToVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {                        
            $table->integer("type_vehicle_id");            
            $table->string("descripcion");
            $table->integer("lugar_id");
            $table->integer("user_id");                
            $table->string("foto");
            $table->date("fecha_ingreso");
            $table->date("fecha_salida");
            $table->time("hora_ingreso");
            $table->time("hora_salida");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
}
