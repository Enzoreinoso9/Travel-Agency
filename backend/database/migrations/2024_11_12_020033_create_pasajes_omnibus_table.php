<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasajesOmnibusTable extends Migration
{
    public function up()
    {
        Schema::create('pasajes_omnibus', function (Blueprint $table) {
            $table->id('id_pasaje');
            $table->string('empresa_transporte');
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
        Schema::dropIfExists('pasajes_omnibus');
    }
}
