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
        Schema::table('componentes', function (Blueprint $table) {
            $table->foreign(['id_paquete'])->references(['id_paquete'])->on('paquetes_turisticos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('componentes', function (Blueprint $table) {
            $table->dropForeign('componentes_id_paquete_foreign');
        });
    }
};
