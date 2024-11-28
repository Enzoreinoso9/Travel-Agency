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
        Schema::create('componentes', function (Blueprint $table) {
            $table->bigIncrements('id_componente');
            $table->unsignedBigInteger('id_paquete')->index('componentes_id_paquete_foreign');
            $table->enum('tipo_componente', ['hospedaje', 'transporte', 'tour', 'comida'])->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componentes');
    }
};
