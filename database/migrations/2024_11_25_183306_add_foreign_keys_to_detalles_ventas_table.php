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
        Schema::table('detalles_ventas', function (Blueprint $table) {
            $table->foreign(['id_paquete'])->references(['id_paquete'])->on('paquetes_turisticos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_pasaje'])->references(['id_pasaje'])->on('pasajes_omnibus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_venta'])->references(['id_venta'])->on('ventas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_vuelo'])->references(['id_vuelo'])->on('vuelos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalles_ventas', function (Blueprint $table) {
            $table->dropForeign('detalles_ventas_id_paquete_foreign');
            $table->dropForeign('detalles_ventas_id_pasaje_foreign');
            $table->dropForeign('detalles_ventas_id_venta_foreign');
            $table->dropForeign('detalles_ventas_id_vuelo_foreign');
        });
    }
};
