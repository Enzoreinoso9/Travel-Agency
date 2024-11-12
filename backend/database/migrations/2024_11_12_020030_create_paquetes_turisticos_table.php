<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTuristicosTable extends Migration
{
    public function up()
    {
        Schema::create('paquetes_turisticos', function (Blueprint $table) {
            $table->id('id_paquete');
            $table->foreignId('id_proveedor')->constrained('proveedores')->onDelete('cascade');
            $table->string('nombre');
            $table->string('destino');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('duracion')->nullable(); // Duración en días
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->integer('disponibilidad')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paquetes_turisticos');
    }
}
