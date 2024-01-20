<?php

// app/Models/Document.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $primaryKey = 'idDocument';
    public $timestamps = false;

    protected $fillable = [
        'idPublication',
        'lien',
    ];

    // Relation avec la publication
    public function publication()
    {
        return $this->belongsTo(Publication::class, 'idPublication', 'idPublication');
    }
}



