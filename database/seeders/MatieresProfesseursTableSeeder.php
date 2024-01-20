<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MatieresProfesseur;

class MatieresProfesseursTableSeeder extends Seeder
{
    public function run(): void
    {
        MatieresProfesseur::create(['idMatiere' => 1, 'idProfesseur' => 2]);
        MatieresProfesseur::create(['idMatiere' => 2, 'idProfesseur' => 3]);
        MatieresProfesseur::create(['idMatiere' => 3, 'idProfesseur' => 4]);
        MatieresProfesseur::create(['idMatiere' => 4, 'idProfesseur' => 5]);
        MatieresProfesseur::create(['idMatiere' => 5, 'idProfesseur' => 6]);
        MatieresProfesseur::create(['idMatiere' => 6, 'idProfesseur' => 7]);
        MatieresProfesseur::create(['idMatiere' => 7, 'idProfesseur' => 8]);
        MatieresProfesseur::create(['idMatiere' => 8, 'idProfesseur' => 9]);

        MatieresProfesseur::create(['idMatiere' => 9, 'idProfesseur' => 2]);
        MatieresProfesseur::create(['idMatiere' => 10, 'idProfesseur' => 3]);
        MatieresProfesseur::create(['idMatiere' => 11, 'idProfesseur' => 4]);
        MatieresProfesseur::create(['idMatiere' => 12, 'idProfesseur' => 5]);
        MatieresProfesseur::create(['idMatiere' => 13, 'idProfesseur' => 6]);
        MatieresProfesseur::create(['idMatiere' => 14, 'idProfesseur' => 7]);
        MatieresProfesseur::create(['idMatiere' => 15, 'idProfesseur' => 8]);
        MatieresProfesseur::create(['idMatiere' => 16, 'idProfesseur' => 9]);

        MatieresProfesseur::create(['idMatiere' => 17, 'idProfesseur' => 2]);
        MatieresProfesseur::create(['idMatiere' => 18, 'idProfesseur' => 3]);
        MatieresProfesseur::create(['idMatiere' => 19, 'idProfesseur' => 4]);
        MatieresProfesseur::create(['idMatiere' => 20, 'idProfesseur' => 5]);
        MatieresProfesseur::create(['idMatiere' => 21, 'idProfesseur' => 6]);
        MatieresProfesseur::create(['idMatiere' => 22, 'idProfesseur' => 7]);
        MatieresProfesseur::create(['idMatiere' => 23, 'idProfesseur' => 8]);
        MatieresProfesseur::create(['idMatiere' => 24, 'idProfesseur' => 9]);


    }
}
