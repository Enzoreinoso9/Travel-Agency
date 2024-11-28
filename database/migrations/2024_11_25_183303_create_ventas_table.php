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
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id_venta');
            $table->unsignedInteger('id_cliente')->index('ventas_id_cliente_foreign');
            $table->unsignedBigInteger('id_usuario')->index('ventas_id_usuario_foreign');
            $table->dateTime('fecha_venta');
            $table->decimal('monto_total', 10);
            $table->enum('estado_pago', ['completo', 'parcial', 'pendiente'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
