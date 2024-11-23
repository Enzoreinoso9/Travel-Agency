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
    Schema::create('clientes', function (Blueprint $table) {
        $table->increments('id_cliente');
        $table->string('nombre', 255);
        $table->string('apellido', 255);
        $table->string('documento', 50)->unique();
        $table->string('email', 255);
        $table->string('telefono', 50)->nullable();
        $table->string('direccion', 255)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
