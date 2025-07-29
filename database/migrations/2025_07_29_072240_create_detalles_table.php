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
            $table->unsignedBigInteger('idAlquiler');
            $table->unsignedBigInteger('idImpresora3D');
            $table->foreign('idAlquiler')
                ->references('id')->on('alquilers')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreign('idImpresora3D')
                ->references('id')->on('impresoras3d')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->tinyInteger('cantidad');
            $table->decimal('precioUnitario', 5, 2);
            $table->decimal('subTotal', 5, 2);
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
