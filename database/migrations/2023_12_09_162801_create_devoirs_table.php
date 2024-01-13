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
        Schema::create('devoirs', function (Blueprint $table) {
            $table->id('idDevoir');

            // Clés étrangères faisant référence aux tables "classes", "users", et "matieres"
            $table->unsignedBigInteger('idClasse');
            $table->foreign('idClasse')->references('idClasse')->on('classes');
  
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('users');
  
            $table->unsignedBigInteger('idMatiere');
            $table->foreign('idMatiere')->references('idMatiere')->on('matieres');
  
            // Texte du devoir
            $table->text('texte');
  
            // Dates de début et de fin du devoir
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
  
            // État du devoir
            $table->integer('etat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devoirs');
    }
};
