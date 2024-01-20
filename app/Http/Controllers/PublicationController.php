<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    
    public function newPublication(){
        return view('publications.nouveau');
    }

    public function createPublication(Request $request){
        $user = User::find(Auth::user()->idUser);

        Publication::create([
            'idUser' => Auth::user()->idUser,
            'texte' => $request->texte,
            'datePublication' => now(), // ou $request->datePublication si vous souhaitez obtenir la date du formulaire
            'etat' => 1,
        ]);

        return redirect()->route('publication.new');
    }

}
