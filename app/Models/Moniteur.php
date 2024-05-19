<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_complet',
        'date_naissance',
        'adresse',
        'email',
        'telephone',
        'cin',
        'date_recrutement',
        'type_moniteur',
        'vehicule_id'
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'vehicule_id');
    }

    public function condidats()
    {
        return $this->hasMany(Condidat::class, 'id_moniteur');
    }
    public function seances()
    {
        return $this->hasMany(Seance::class, 'moniteur_id', 'id');
    }
}
