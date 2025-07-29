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
            $table->unsignedBigInteger('idArrendador');
            $table->unsignedBigInteger('idArrendatario');
            $table->foreign('idArrendador')
                ->references('id')->on('users')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreign('idArrendatario')
                ->references('id')->on('users')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
            $table->decimal('total', 5, 2);
            $table->enum('estado', ['3', '2', '1', '0'])->default('1');
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
