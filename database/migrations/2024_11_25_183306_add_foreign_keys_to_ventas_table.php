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
        Schema::table('ventas', function (Blueprint $table) {
            $table->foreign(['id_cliente'])->references(['id_cliente'])->on('clientes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['id_usuario'])->references(['id_usuario'])->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ventas', function (Blueprint $table) {
            $table->dropForeign('ventas_id_cliente_foreign');
            $table->dropForeign('ventas_id_usuario_foreign');
        });
    }
};
