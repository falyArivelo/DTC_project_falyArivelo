<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\matieresProfesseur;
use Illuminate\Http\Request;

class MatiereController extends Controller
{

    public function newMatiere()
    {
        return view('matieres.nouveau');
    }

    public function createMatiere(Request $request)
    {

        Matiere::create([
            'nom' => $request->nom
        ]);

        return redirect()->route('matiere.list');
    }
    public function listMatieres()
    {
        $matieres = Matiere::all();

        return view('matieres.liste', [
            'matieres' => $matieres
        ]);
    }

    public function form_atributeToProf()
    {
        $matieres = Matiere::all();
        $professeur = new \App\Models\Professeur();
        $professeurs = $professeur->getProfesseurs();

        return view('matieres.form_atributeToProf', [
            'professeurs' => $professeurs,
            'matieres' => $matieres
        ]);
    }

    public function atributeToProf(Request $request)
    {
        matieresProfesseur::create([
            'idProfesseur' => $request->idProfesseur,
            'idMatiere' => $request->idMatiere
        ]);

        return redirect()->route('matiere.list_atributeToProf');
    }

    public function list_atributeToProf()
    {
        $matieresProfesseurs = matieresProfesseur::all();

        return view('matieres.list_atributeToProf', [
            'matieresProfesseurs' => $matieresProfesseurs
        ]);
    }
}
