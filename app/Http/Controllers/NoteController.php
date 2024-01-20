<?php

namespace App\Http\Controllers;

use App\Models\matieresProfesseur;
use App\Models\Note; // Importez le modèle Note
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function newNote($idEleve)
    {
        $eleve = User::find($idEleve);
        $professeur = User::find(Auth::user()->idUser);
        $matieresDuProfesseurs = matieresProfesseur::where('idProfesseur', $professeur->idUser)->get();

        // if ($professeur->hasRole('professeur')) {
            return view('notes.nouveau', [
                'eleve' => $eleve,
                'matieresDuProfesseurs'=>$matieresDuProfesseurs
            ]);

        // }
        return redirect()->back();

    }

    public function createNote(Request $request)
    {
        Note::create([
            'idUser' => $request->idEleve,
            'idMatiere' => $request->idMatiere,
            'note' => $request->note,
            'dateTest' => $request->dateTest,
        ]);

        return redirect()->back();
    }

    public function listNotes()
    {
        $notes = Note::all();

        return view('notes.liste', [
            'notes' => $notes
        ]);
    }
}
