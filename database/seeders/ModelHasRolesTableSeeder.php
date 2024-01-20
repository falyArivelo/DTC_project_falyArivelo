<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;


class ModelHasRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $direction = User::find(1);
        $direction->assignRole('direction');

        $professeurs = User::whereBetween('idUser', [2, 9])->get();

        $roleProf = Role::where('name', 'professeur')->first();
        foreach ($professeurs as $professeur) {
            $professeur->assignRole($roleProf);
        }

        $eleves = User::whereBetween('idUser', [10, 27])->get();

        $roleEleve = Role::where('name', 'eleve')->first();
        foreach ($eleves as $eleve) {
            $eleve->assignRole($roleEleve);
        }
    }
}
