<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = [
        'type_seance', 'date_debut', 'date_fin', 'horaire', 'moniteur_id', 'candidat_id'
    ];

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class, 'moniteur_id', 'id');
    }

    public function candidat()
    {
        return $this->belongsTo(Condidat::class, 'candidat_id', 'id');
    }
}
