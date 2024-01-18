<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('matieresProfesseurs', function (Blueprint $table) {
            $table->unsignedBigInteger('idMatiere');
            $table->unsignedBigInteger('idProfesseur');
            // Foreign keys
            $table->foreign('idMatiere')->references('idMatiere')->on('matieres');
            $table->foreign('idProfesseur')->references('idUser')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('matieresProfesseurs');
    }
};
