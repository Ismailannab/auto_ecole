<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'modele',
        'marque'
    ];

    public function moniteurs()
    {
        return $this->hasMany(Moniteur::class, 'id_vehicule');
    }
}
