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
        Schema::create('facultades_universidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_facultad');
            $table->unsignedBigInteger('id_universidad');
            $table->timestamps();


            $table->foreign('id_facultad')->references('id')->on('facultades')->onDelete('cascade');
            $table->foreign('id_universidad')->references('id')->on('universidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facultades_universidades');
    }
};
