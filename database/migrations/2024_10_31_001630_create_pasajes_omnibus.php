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
        Schema::create('pasajesomnibus', function (Blueprint $table) {
            $table->increments('id_pasaje');
            $table->string('empresa_transporte', 255);
            $table->string('origen', 255);
            $table->string('destino', 255);
            $table->datetime('fecha_salida');
            $table->datetime('fecha_llegada');
            $table->decimal('precio', 10, 2);
            $table->integer('disponibilidad')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasajes_omnibus');
    }
};
