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
        Schema::create('clases_carreras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_clase');
            $table->unsignedBigInteger('id_carrera');
            $table->timestamps();

            $table->foreign('id_clase')->references('id')->on('clases')->onDelete('cascade');
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases_carreras');
    }
};
