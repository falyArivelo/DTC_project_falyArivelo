<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PromotionEleve;

class PromotionElevesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 2003 4 P1
        PromotionEleve::create(['idPromotion' => 1, 'idEleve' => 10]);
        PromotionEleve::create(['idPromotion' => 1, 'idEleve' => 19]);
        PromotionEleve::create(['idPromotion' => 1, 'idEleve' => 22]);
        PromotionEleve::create(['idPromotion' => 1, 'idEleve' => 24]);
        PromotionEleve::create(['idPromotion' => 1, 'idEleve' => 25]);
        PromotionEleve::create(['idPromotion' => 1, 'idEleve' => 27]);
        // 2005 6 P2 
        PromotionEleve::create(['idPromotion' => 2, 'idEleve' => 11]);
        PromotionEleve::create(['idPromotion' => 2, 'idEleve' => 12]);
        PromotionEleve::create(['idPromotion' => 2, 'idEleve' => 20]);
        PromotionEleve::create(['idPromotion' => 2, 'idEleve' => 21]);
        PromotionEleve::create(['idPromotion' => 2, 'idEleve' => 23]);
        PromotionEleve::create(['idPromotion' => 2, 'idEleve' => 26]);
        //2007 8 P3
        PromotionEleve::create(['idPromotion' => 3, 'idEleve' => 13]);
        PromotionEleve::create(['idPromotion' => 3, 'idEleve' => 14]);
        PromotionEleve::create(['idPromotion' => 3, 'idEleve' => 15]);
        PromotionEleve::create(['idPromotion' => 3, 'idEleve' => 16]);
        PromotionEleve::create(['idPromotion' => 3, 'idEleve' => 17]);
        PromotionEleve::create(['idPromotion' => 3, 'idEleve' => 18]);

    }
}
