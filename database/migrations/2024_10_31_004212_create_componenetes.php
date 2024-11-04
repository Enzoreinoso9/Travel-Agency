<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('componentes', function (Blueprint $table) {
            $table->increments('id_componente');
            $table->integer('id_paquete')->unsigned()->nullable();
            $table->enum('tipo_componente', ['hospedaje', 'transporte', 'tour', 'comida'])->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2)->nullable();
            $table->timestamps();

            $table->foreign('id_paquete')->references('id_paquete')->on('paquetes_turisticos')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componenetes');
    }
};
