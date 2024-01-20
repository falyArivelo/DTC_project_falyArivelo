<?php
// Dans la migration create_promotions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id('idPromotion');
            $table->string('nom', 250);
        });
    }

    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
