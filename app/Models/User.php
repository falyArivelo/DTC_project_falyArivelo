<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;
    public $timestamps = false;
    protected $guarded = [''];
    protected $primaryKey = 'idUser';


    public function users()
    {
        return $this->belongsToMany(User::class, 'matieresProfesseurs', 'idMatiere', 'idUser');
    }

    public function abscences()
    {
        return $this->hasMany(Abscence::class, 'idUser');
    }
    
}
