<?php

// app/Models/Publication.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';
    protected $primaryKey = 'idPublication';
    public $timestamps = false;

    protected $fillable = [
        'idUser',
        'texte',
        'datePublication',
        'etat',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }
}
