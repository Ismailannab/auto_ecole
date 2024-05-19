<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'sex',
        'date_naissance',
        'adresse',
        'email',
        'telephone',
        'cin',
        'date_inscription',
        'id_moniteur',
        'id_permis'
    ];

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class, 'id_moniteur');
    }

    public function permis()
    {
        return $this->belongsTo(Permis::class, 'id_permis');
    }
    
    public function seances()
    {
        return $this->hasMany(Seance::class, 'condidat_id', 'id');
    }
    
    

public function payments()
    {
        return $this->hasMany(Payment::class);
    }

     public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }
}
