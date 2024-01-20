<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\PromotionEleve;

class EleveController extends Controller{
    public function newEleve(){
        return view('eleves.nouveau');
    }

    public function createEleve(Request $request){
        return redirect()->route('eleves.list');  // Assuming you have 'eleve.list' as the route name
    }

    public function listEleves()
    {
        $eleve = new \App\Models\Eleve();
        $eleves = $eleve->getEleves();

        $promotionEleves = PromotionEleve::with('promotion','eleve')->get();

        return view('eleves.liste', [
            'eleves' => $eleves,
            'promotionEleves' => $promotionEleves
        ]);
    }
}
