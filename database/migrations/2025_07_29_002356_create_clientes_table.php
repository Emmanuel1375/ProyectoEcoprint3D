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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idColegio')->constrained('colegios')->restrictOnUpdate()->restrictOnDelete()->nullable(false);
            $table->string('ci', 9)->unique();
            $table->string('nombres', 30);
            $table->string('primerApellido', 30);
            $table->string('segundoApellido', 30)->nullable();
            $table->string('nombreUsuario', 15)->unique();
            $table->string('password', 60);
            $table->string('direccion', 255)->nullable();
            $table->enum('estado', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
