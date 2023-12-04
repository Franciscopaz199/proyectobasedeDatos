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
        Schema::create('comentarios_autores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recurso_version');
            $table->unsignedBigInteger('id_estudiante');
            $table->string('titulo_comentario', 60);
            $table->string('contenido_comentario', 100);
            $table->timestamps();

            $table->foreign('id_recurso_version')->references('id')->on('recursos_versiones');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios_autores');
    }
};
