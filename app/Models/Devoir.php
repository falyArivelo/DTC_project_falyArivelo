<?php

// app/Models/Devoir.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devoir extends Model
{
    protected $table = 'devoirs';
    protected $primaryKey = 'idDevoir';
    public $timestamps = false;

    protected $fillable = [
        'idClasse',
        'idUser',
        'idMatiere',
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

    // Relation avec la matière
    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'idMatiere', 'idMatiere');
    }
}
