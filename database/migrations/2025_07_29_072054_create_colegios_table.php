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
        Schema::create('colegios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUser')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nombre', 70);
            $table->string('direccion', 120);
            $table->enum('tipo', ['Fiscal', 'Privado', 'Público']);
            $table->string('telefonoContacto', 15);
            $table->enum('estado', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colegios');
    }
};
