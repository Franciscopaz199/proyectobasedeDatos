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
        // Migración para la tabla 'centros'
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_universidad');
            $table->string('nombre_centro', 60);
            $table->string('correo_electronico', 60);
            $table->string('direccion', 60);
            $table->timestamps();
            //           $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->foreign('id_universidad')->references('id')->on('universidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros');
    }
};
