<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class ProfesseurController extends Controller{
    public function newProfesseur(){
        return view('professeurs.nouveau');
    }

    public function createProfesseur(Request $request){
        return redirect()->route('professeurs.list');  
    }

    public function listProfesseurs()
    {
        $professeurRole = Role::where('name', 'professeur')->first();
        $professeurs = array();
        if ($professeurRole) {
            $professeurs = User::whereHas('roles', function ($query) use ($professeurRole) {
                $query->where('role_id', $professeurRole->id);
            })->get();

            // Now $professeurUsers contains the users with the 'professeur' role.
        } else {
            // Handle the case where the 'professeur' role does not exist.
        }

        return view('professeurs.liste',[
            'professeurs' => $professeurs
        ]);
    }
}
