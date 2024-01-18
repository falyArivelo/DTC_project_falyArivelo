<?php
namespace App\Models;

use Spatie\Permission\Models\Role;
class Professeur 
{


   public function getProfesseurs() 
   {
       $professeurRole = Role::where('name', 'professeur')->first();
       $professeurs = array();
       if ($professeurRole) {
           $professeurs = User::whereHas('roles', function ($query) use ($professeurRole) {
               $query->where('role_id', $professeurRole->id);
           })->get();
           return $professeurs;
       }
       return $professeurs;
   }
}
