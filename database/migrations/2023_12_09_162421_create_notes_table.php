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
        Schema::create('notes', function (Blueprint $table) {
            $table->id('idNote');

            // Clés étrangères faisant référence à la table "users" et "matieres"
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('users');

            $table->unsignedBigInteger('idMatiere');
            $table->foreign('idMatiere')->references('idMatiere')->on('matieres');

            // Note et date du test
            $table->float('note');
            $table->dateTime('dateTest');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
