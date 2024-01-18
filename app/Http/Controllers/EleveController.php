<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class EleveController extends Controller{
    public function newEleve(){
        return view('eleves.nouveau');
    }

    public function createEleve(Request $request){
        return redirect()->route('eleves.list');  // Assuming you have 'eleve.list' as the route name
    }

    public function listEleves()
    {
        $eleveRole = Role::where('name', 'eleve')->first();
        $eleves = array();
        if ($eleveRole) {
            $eleves = User::whereHas('roles', function ($query) use ($eleveRole) {
                $query->where('role_id', $eleveRole->id);
            })->get();

            // Now $eleves contains the users with the 'eleve' role.
        } else {
            // Handle the case where the 'eleve' role does not exist.
        }

        return view('eleves.liste', [
            'eleves' => $eleves
        ]);
    }
}
