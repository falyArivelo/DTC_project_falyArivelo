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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id('idMatiere');

            // Nom de la matière
            $table->string('nom', 200);
            $table->unsignedBigInteger('idClasse');
    
            // Assurez-vous que la colonne référencée est indexée dans la table 'classes'
            $table->foreign('idClasse')->references('idClasse')->on('classes')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
