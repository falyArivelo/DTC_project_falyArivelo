<?php

namespace App\Http\Controllers;

use App\Models\Abscence;
use App\Models\Eleve;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PromotionEleve;

class EleveController extends Controller
{
    public function newEleve()
    {
        return view('eleves.nouveau');
    }

    public function createEleve(Request $request)
    {
        return redirect()->route('eleves.list');  // Assuming you have 'eleve.list' as the route name
    }
    
    public function listEleves()
    {
        $eleve = new \App\Models\Eleve();
        $eleves = $eleve->getEleves();

        $promotionEleves = PromotionEleve::with('promotion', 'eleve')->get();

        return view('eleves.liste', [
            'eleves' => $eleves,
            'promotionEleves' => $promotionEleves
        ]);
    }

    public function bulletin($idUser)
    {
        // Récupérez les informations de l'élève en fonction de l'idUser
        $eleve = User::find($idUser);
        $e = new Eleve($idUser);

        $notesSecondes = $e->bulletin(1);
        $notesPremieres = $e->bulletin(2);
        $notesTerminales = $e->bulletin(3);


        // Faites quelque chose avec les informations de l'élève, par exemple, afficher le bulletin
        return view('eleves.bulletin', [
            'eleve' => $eleve,
            'notesSecondes' =>$notesSecondes,
            'notesPremieres' =>$notesPremieres,
            'notesTerminales' =>$notesTerminales,
        ]);

    }

    public function newAbscence(){
        $eleve = new \App\Models\Eleve();
        $eleves = $eleve->getEleves();
        return view('abscences.nouveau',[
            'eleves' => $eleves 
        ]);
    }

    public function createAbscence(Request $request){
        Abscence::create([
            'idUser' => $request->idUser,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin,
        ]);
        return redirect()->back();
    }

    public function voirAbscence($idUser){
        $user = User::find($idUser);
        $abscences = $user->abscences;

        return view('abscences.liste', ['abscences' => $abscences]);
    }



}
