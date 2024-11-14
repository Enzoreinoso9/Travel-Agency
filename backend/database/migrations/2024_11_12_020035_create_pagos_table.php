<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->foreignId('id_venta')->constrained('ventas')->onDelete('cascade');
            $table->decimal('monto', 10, 2);
            $table->dateTime('fecha_pago');
            $table->enum('metodo_pago', ['tarjeta', 'efectivo', 'transferencia']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
