<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];
    public function condidats()
    {
        return $this->hasMany(Condidat::class, 'id_permis');
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
