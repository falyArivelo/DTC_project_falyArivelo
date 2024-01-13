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
        Schema::create('abscences', function (Blueprint $table) {
            $table->id('idAbscence');

            // Clé étrangère faisant référence à la table "users"
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('users');

            // Dates de début et de fin de l'absence
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abscences');
    }
};
