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
        Schema::create('paquetes_turisticos', function (Blueprint $table) {
            $table->bigIncrements('id_paquete');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha_vuelo');
            $table->time('hora_salida');
            $table->enum('estado', ['programado', 'completado', 'cancelado'])->default('programado');
            $table->integer('capacidad')->default(0);
            $table->integer('asientos_disponibles')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquetes_turisticos');
    }
};
