<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'classes';
    protected $primaryKey = 'idClasse';
    protected $fillable = ['nom'];
   
    protected function nom(): Attribute
    {
      return Attribute::make(
        get: fn ($value) => ucfirst($value),
        set: fn ($value) => strtoupper($value),
      );
    }
}
