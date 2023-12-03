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
        Schema::create('autores_recursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recurso');
            $table->unsignedBigInteger('id_estudiante');
            $table->timestamps();

            $table->foreign('id_recurso')->references('id')->on('recursos');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autores_recursos');
    }
};
