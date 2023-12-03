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
        Schema::create('mensajes_temas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tema_discusion');
            $table->unsignedBigInteger('id_estudiante');
            $table->string('contenido_mensaje', 100);
            $table->timestamps();

            $table->foreign('id_tema_discusion')->references('id')->on('temas_discusion');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes_temas');
    }
};
