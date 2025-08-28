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
        Schema::create('detalles', function (Blueprint $table) {
            $table->foreignId('idAlquiler')->constrained('alquilers')->cascadeOnUpdate()->restrictOnDelete()->nullable(false);
            $table->foreignId('idImpresora3D')->constrained('impresora3ds')->cascadeOnUpdate()->restrictOnDelete()->nullable(false);
            $table->tinyInteger('cantidad');
            $table->decimal('precioUnitario', 8, 2);
            $table->decimal('subTotal', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
