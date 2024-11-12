<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesxVentasTable extends Migration
{
    public function up()
    {
        Schema::create('detallesxventas', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->foreignId('id_venta')->constrained('ventas')->onDelete('cascade');
            $table->foreignId('id_paquete')->nullable()->constrained('paquetes_turisticos')->onDelete('cascade');
            $table->foreignId('id_pasaje')->nullable()->constrained('pasajes_omnibus')->onDelete('cascade');
            $table->foreignId('id_vuelo')->nullable()->constrained('vuelos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detallesxventas');
    }
}
