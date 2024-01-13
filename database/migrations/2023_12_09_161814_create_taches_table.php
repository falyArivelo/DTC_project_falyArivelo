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
        Schema::create('taches', function (Blueprint $table) {
            // Identifiant de la tâche
            $table->id('idTache');

            // Clé étrangère faisant référence à la table "classes"
            $table->unsignedBigInteger('idClasse');
            $table->foreign('idClasse')->references('idClasse')->on('classes');

            // Clé étrangère faisant référence à la table "users"
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('users');

            // Texte de la tâche
            $table->text('texte');

            // Dates de début et de fin de la tâche
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');

            // État de la tâche
            $table->integer('etat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
