<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->foreignId('id_cliente')->nullable()->constrained('clientes')->onDelete('set null');
            $table->foreignId('id_usuario')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->dateTime('fecha_venta');
            $table->decimal('monto_total', 10, 2);
            $table->enum('estado_pago', ['completo', 'parcial', 'pendiente'])->default('pendiente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
