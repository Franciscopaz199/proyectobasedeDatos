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
        Schema::create('temas_discusion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recurso');
            $table->unsignedBigInteger('id_estado_tema');
            $table->unsignedBigInteger('id_estudiante');
            $table->unsignedBigInteger('id_categoria_tema');
            $table->string('titulo_tema', 60);
            $table->string('descripcion', 60);
            $table->timestamps();

            $table->foreign('id_recurso')->references('id')->on('recursos');
            $table->foreign('id_estado_tema')->references('id')->on('estados_temas');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            $table->foreign('id_categoria_tema')->references('id')->on('categorias_temas');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas_discusion');
    }
};
