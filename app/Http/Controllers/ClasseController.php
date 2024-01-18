<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function newClasse(){
        return view('classes.nouveau');
    }

    public function createClasse(Request $request){

        Classe::create([
            'nom' => $request->nom
        ]);

        return redirect()->route('classe.list');  
    }

    public function getClasses(){

        $classes = Classe::all();

        return view('classes.liste',[
            'classes' => $classes
        ]);

        
    }
}
