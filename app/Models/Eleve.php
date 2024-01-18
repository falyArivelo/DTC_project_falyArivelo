<?php
namespace App\Models;

use Spatie\Permission\Models\Role;
class Eleve 
{


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
}
