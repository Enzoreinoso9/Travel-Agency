<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ventas', function (Blueprint $table) {
        $table->increments('id_venta');
        $table->unsignedInteger('id_cliente');
        $table->unsignedInteger('id_usuario');
        $table->datetime('fecha_venta');
        $table->decimal('monto_total', 10, 2);
        $table->enum('estado_pago', ['completo', 'parcial', 'pendiente'])->default('pendiente');
        $table->timestamps();

        $table->foreign('id_cliente')
              ->references('id_cliente')
              ->on('clientes')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        
        $table->foreign('id_usuario')
              ->references('id_usuario')
              ->on('usuarios')
              ->onDelete('cascade')
              ->onUpdate('cascade');
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
