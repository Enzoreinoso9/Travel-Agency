<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalles_ventas', function (Blueprint $table) {
            $table->increments('id_detalle');
            $table->unsignedInteger('id_venta')->nullable()->index('detalles_ventas_id_venta_foreign');
            $table->unsignedBigInteger('id_paquete')->nullable()->index('detalles_ventas_id_paquete_foreign');
            $table->unsignedInteger('id_pasaje')->nullable()->index('detalles_ventas_id_pasaje_foreign');
            $table->unsignedInteger('id_vuelo')->nullable()->index('detalles_ventas_id_vuelo_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_ventas');
    }
};
