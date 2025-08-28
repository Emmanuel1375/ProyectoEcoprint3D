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
        Schema::create('impresora3ds', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 150);
            $table->string('modelo', 10);
            $table->string('rutaImagen', 75);
            $table->decimal('precioBase', 8, 2);
            $table->enum('estado', ['3','2','1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impresora3ds');
    }
};
