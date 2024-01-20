<?php
// Dans la migration create_promotion_eleves_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionElevesTable extends Migration
{
    public function up()
    {
        Schema::create('promotionEleves', function (Blueprint $table) {
            $table->unsignedBigInteger('idPromotion');
            $table->unsignedBigInteger('idEleve');
            // Foreign keys
            $table->foreign('idPromotion')->references('idPromotion')->on('promotions');
            $table->foreign('idEleve')->references('idUser')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('promotionEleves');
    }
}
