<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionEleve extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'promotionEleves';
    protected $fillable = ['idPromotion', 'idEleve'];

    // Définir la clé primaire composite
    protected $primaryKey = ['idPromotion', 'idEleve'];
    public $incrementing = false;

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'idPromotion', 'idPromotion');
    }

    public function eleve()
    {
        return $this->belongsTo(User::class, 'idEleve', 'idUser');
    }
}
