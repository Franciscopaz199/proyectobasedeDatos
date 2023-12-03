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
        // Migración para la tabla 'administradores_universidades'
        Schema::create('administradores_universidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_universidad');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            // $table->foreign('')->references('id')->on('')->onDelete('cascade');
            $table->foreign('id_universidad')->references('id')->on('universidades')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradores_universidades');
    }
};
