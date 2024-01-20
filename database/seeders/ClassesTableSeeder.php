<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classe;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classe::create([
            'idClasse' => 1,
            'nom' => '2nd'
        ]);

        Classe::create([
            'idClasse' => 2,
            'nom' => '1ere'
        ]);

        Classe::create([
            'idClasse' => 3,
            'nom' => 'Tle'
        ]);
    }
}
