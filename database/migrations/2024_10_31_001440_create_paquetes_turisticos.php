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
    Schema::create('paquetesturisticos', function (Blueprint $table) {
        $table->increments('id_paquete');
        $table->string('nombre', 255);
        $table->string('destino', 255);
        $table->text('descripcion')->nullable();
        $table->decimal('precio', 10, 2);
        $table->integer('duracion')->nullable();
        $table->date('fecha_inicio')->nullable();
        $table->date('fecha_fin')->nullable();
        $table->integer('disponibilidad')->nullable();
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
