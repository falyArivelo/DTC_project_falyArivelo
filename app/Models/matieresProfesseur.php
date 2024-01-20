<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieresProfesseur extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['idMatiere','idProfesseur'];

    protected $table = 'matieresProfesseurs';
    public $incrementing = false;

    // Définir les clés primaires pour la relation Many-to-Many
    protected $primaryKey = ['idMatiere', 'idProfesseur'];

    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'idMatiere', 'idMatiere');
    }

    public function professeur()
    {
        return $this->belongsTo(User::class, 'idProfesseur', 'idUser');
    }
}
