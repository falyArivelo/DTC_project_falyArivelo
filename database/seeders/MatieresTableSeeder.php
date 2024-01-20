<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matiere;
class MatieresTableSeeder extends Seeder
{
    public function run(): void
    {
        // 2nd
        Matiere::create([
            'idMatiere' => 1,
            'nom' => 'Malagasy',
            'idClasse' => 1,
            'coefficient' => 3,
        ]);
        Matiere::create([
            'idMatiere' => 2,
            'nom' => 'Mathematique',
            'idClasse' => 1,
            'coefficient' => 4,
        ]);
        Matiere::create([
            'idMatiere' => 3,
            'nom' => 'SVT',
            'idClasse' => 1,
            'coefficient' => 4,
        ]);

        Matiere::create([
            'idMatiere' => 4,
            'nom' => 'Physique',
            'idClasse' => 1,
            'coefficient' => 3,
        ]);

        Matiere::create([
            'idMatiere' => 5,
            'nom' => 'Francais',
            'idClasse' => 1,
            'coefficient' => 2,
        ]);



        Matiere::create([
            'idMatiere' => 6,
            'nom' => 'Anglais',
            'idClasse' => 1,
            'coefficient' => 3,
        ]);

        Matiere::create([
            'idMatiere' => 7,
            'nom' => 'Eps',
            'idClasse' => 1,
            'coefficient' => 1,
        ]);

        Matiere::create([
            'idMatiere' => 8,
            'nom' => 'Histoire',
            'idClasse' => 1,
            'coefficient' => 3,
        ]);

// 1ere
        Matiere::create([
            'idMatiere' => 9,
            'nom' => 'Malagasy',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 10,
            'nom' => 'Mathematique',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 11,
            'nom' => 'SVT',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 12,
            'nom' => 'Physique',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 13,
            'nom' => 'Francais',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 14,
            'nom' => 'Anglais',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 15,
            'nom' => 'Eps',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 16,
            'nom' => 'Histoire',
            'idClasse' => 2,
            'coefficient' => rand(1, 5),
        ]);

        // TLE
        Matiere::create([
            'idMatiere' => 17,
            'nom' => 'Malagasy',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 18,
            'nom' => 'Mathematique',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 19,
            'nom' => 'SVT',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 20,
            'nom' => 'Physique',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 21,
            'nom' => 'Francais',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 22,
            'nom' => 'Anglais',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 23,
            'nom' => 'Eps',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);

        Matiere::create([
            'idMatiere' => 24,
            'nom' => 'Histoire',
            'idClasse' => 3,
            'coefficient' => rand(1, 5),
        ]);
    }
}
