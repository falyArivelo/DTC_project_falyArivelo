<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory; 
       public $timestamps = false;
    protected $table = 'notes';
    protected $primaryKey = 'idNote';


    protected $fillable = ['idUser', 'idMatiere', 'note', 'dateTest'];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'idMatiere', 'idMatiere');
    }
}
