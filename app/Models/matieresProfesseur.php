<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieresProfesseur extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'matieresProfesseurs';
    protected $fillable = ['idMatiere','idProfesseur'];

    
}
