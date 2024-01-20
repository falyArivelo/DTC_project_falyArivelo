<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'promotions';
    protected $primaryKey = 'idPromotion';
    protected $fillable = ['nom'];
   
    protected function nom(): Attribute
    {
      return Attribute::make(
        get: fn ($value) => ucfirst($value),
        set: fn ($value) => $value,
      );
    }
}
