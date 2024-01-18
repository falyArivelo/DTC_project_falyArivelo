<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class ProfesseurController extends Controller{
    public function newProfesseur(){
        return view('professeurs.nouveau');
    }

    public function createProfesseur(Request $request){
        return redirect()->route('professeurs.list');  
    }

    public function listProfesseurs()
    {

        $professeur = new \App\Models\Professeur();
        $professeurs = $professeur->getProfesseurs();

        return view('professeurs.liste',[
            'professeurs' => $professeurs
        ]);
    }
}
