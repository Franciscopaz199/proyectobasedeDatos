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
        Schema::create('recursos_versiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recurso');
            $table->unsignedBigInteger('id_version_recurso');
            $table->unsignedBigInteger('id_estado_recurso');
            $table->string('enlace_descarga', 60);
            $table->string('descripcion', 60);
            $table->timestamps();

            $table->foreign('id_recurso')->references('id')->on('recursos')->onDelete('cascade');
            $table->foreign('id_version_recurso')->references('id')->on('versiones_recursos')->onDelete('cascade');
            $table->foreign('id_estado_recurso')->references('id')->on('estados_recursos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos_versiones');
    }
};
