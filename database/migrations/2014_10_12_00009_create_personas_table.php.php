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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sexo');
            $table->unsignedBigInteger('id_genero');
            $table->unsignedBigInteger('id_ciudad');
            $table->unsignedBigInteger('id_estado_civil');
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->timestamps();
            
            $table->foreign('id_sexo')->references('id')->on('sexos')->onDelete('cascade');
            $table->foreign('id_genero')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('id_ciudad')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('id_estado_civil')->references('id')->on('estados_civil')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
