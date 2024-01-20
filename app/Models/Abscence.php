<?php
// app/Models/Absence.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abscence extends Model
{
    protected $table = 'abscences';
    protected $primaryKey = 'idAbscence';
    public $timestamps = false;

    protected $fillable = [
        'idUser',
        'dateDebut',
        'dateFin',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }
}
