<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create(['idPromotion'=> 1,'nom' => 'Promotion 1']);
        Promotion::create(['idPromotion'=> 2,'nom' => 'Promotion 2']);
        Promotion::create(['idPromotion'=> 3,'nom' => 'Promotion 3']);
    }
}
