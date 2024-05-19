<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = [
        'type_seance', 'date_debut', 'date_fin', 'horaire', 'moniteur_id', 'condidat_id'
    ];

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class, 'moniteur_id', 'id');
    }

    public function condidat()
    {
        return $this->belongsTo(Condidat::class, 'condidat_id', 'id');
    }
}
