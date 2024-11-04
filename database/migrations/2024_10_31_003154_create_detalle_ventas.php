<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('detalles_ventas', function (Blueprint $table) {
            $table->increments('id_detalle');
            $table->integer('id_venta')->unsigned()->nullable();
            $table->integer('id_paquete')->unsigned()->nullable();
            $table->integer('id_pasaje')->unsigned()->nullable();
            $table->integer('id_vuelo')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_venta')->references('id_venta')->on('ventas')->onDelete('cascade');
            $table->foreign('id_paquete')->references('id_paquete')->on('paquetes_turisticos')->onDelete('cascade');
            $table->foreign('id_pasaje')->references('id_pasaje')->on('pasajes_omnibus')->onDelete('cascade');
            $table->foreign('id_vuelo')->references('id_vuelo')->on('vuelos')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
