<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuelosTable extends Migration
{
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id('id_vuelo');
            $table->string('aerolinea');
            $table->string('origen');
            $table->string('destino');
            $table->dateTime('fecha_salida');
            $table->dateTime('fecha_llegada');
            $table->decimal('precio', 10, 2);
            $table->integer('disponibilidad')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
}
