<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class Eleve
{
    private $idEleve;

    public function __construct($idEleve = null) {
        $this->idEleve = $idEleve;
    }


    public function __constructWithId($idEleve) {
        $this->idEleve = $idEleve;
    }

    public function getIdEleve() {
        return $this->idEleve;
    }

    public function setIdEleve($idEleve) {
        $this->idEleve = $idEleve;
    }

    public function getEleves()
    {
        $eleveRole = Role::where('name', 'eleve')->first();
        $eleves = array();
        if ($eleveRole) {
            $Eleves = User::whereHas('roles', function ($query) use ($eleveRole) {
                $query->where('role_id', $eleveRole->id);
            })->get();
            return $Eleves;
        }
        return $eleves;
    }

    public function bulletin($idClasse)
    {

        $tableauAssociatif = array(
            "" => "John",
            "age" => 30,
            "ville" => "Paris"
        );

        
        $result = DB::table('notes as n')
            ->leftJoin('matieres as m', 'n.idMatiere', '=', 'm.idMatiere')
            ->join('classes as c', 'c.idClasse', '=', 'm.idClasse')
            ->join('users as e', 'e.idUser', '=', 'n.idUser')
            ->select('n.*', 'c.nom as nomclasse', 'm.nom as nommatiere')
            ->where('c.idClasse', '=',$idClasse )
            ->where('e.idUser', '=', $this->idEleve)
            ->get();

            return $result;
    }
}
