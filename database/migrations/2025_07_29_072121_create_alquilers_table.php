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
        Schema::create('alquilers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUsuario')->constrained('users')->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('idCliente')->constrained('clientes')->restrictOnUpdate()->restrictOnDelete();
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
            $table->decimal('total', 8, 2);
            $table->enum('estado', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquilers');
    }
};
