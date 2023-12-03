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
        Schema::create('sugerencias_recursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recurso_version');
            $table->string('titulo_sugerencia', 50);
            $table->string('contenido_sugerencia', 100);
            $table->timestamps();

            $table->foreign('id_recurso_version')->references('id')->on('recursos_versiones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sugerencias_recursos');
    }
};
