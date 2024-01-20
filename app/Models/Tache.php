<?php

// app/Models/Tache.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $table = 'taches';
    protected $primaryKey = 'idTache';
    public $timestamps = false;

    protected $fillable = [
        'idClasse',
        'idUser',
        'texte',
        'dateDebut',
        'dateFin',
        'etat',
    ];

    // Relation avec la classe
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'idClasse', 'idClasse');
    }

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }
}
