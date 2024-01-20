<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\matieresProfesseur;
use App\Models\User;

class ProfesseurController extends Controller
{
    public function newProfesseur()
    {
        return view('professeurs.nouveau');
    }

    public function createProfesseur(Request $request)
    {
        return redirect()->route('professeurs.list');
    }

    public function listProfesseurs()
    {

        $professeur = new \App\Models\Professeur();
        $professeurs = $professeur->getProfesseurs();

        // $user = User::find($userId);
        // $matieres = $user->matieres;

        // Vous pouvez maintenant accéder aux matières associées à cet utilisateur
        // foreach ($matieres as $matiere) {
        //     echo $matiere->nom;
        // }

        $matieresProfesseurs = matieresProfesseur::with('matiere', 'professeur')->get();

        return view('professeurs.liste', [
            'matieresProfesseurs' => $matieresProfesseurs,
        ]);
    }
}
