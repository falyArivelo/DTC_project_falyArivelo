<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    
    public function newMatiere(){
        return view('matieres.nouveau');
    }

    public function createMatiere(Request $request){
        
        Matiere::create([
            'nom' => $request->nom
        ]);

        return redirect()->route('matiere.list'); 
    }
    public function listMatieres(){
        $matieres = Matiere::all();

        return view('matieres.liste',[
            'matieres' => $matieres
        ]);

    }
}
