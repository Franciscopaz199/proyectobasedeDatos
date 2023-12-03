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
        // Migración para la tabla 'encargados_centros'
        Schema::create('encargados_centros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_centro');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
            // $table->foreign('')->references('id')->on('')->onDelete('cascade');
            $table->foreign('id_centro')->references('id')->on('centros')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encargados_centros');
    }
};
