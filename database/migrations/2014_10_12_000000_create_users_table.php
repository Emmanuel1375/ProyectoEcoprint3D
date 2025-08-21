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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 30);
            $table->string('primerApellido', 30);
            $table->string('segundoApellido', 30)->nullable();
            $table->string('ci', 9)->unique();
            $table->string('nombreUsuario', 15)->unique();
            $table->string('password', 60);
            $table->string('direccion', 255)->nullable();
            $table->enum('rol', ['Admin', 'Empleado']);
            $table->enum('estado', ['1', '0'])->default('1');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
