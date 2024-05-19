<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix',
        'date_paiement',
        'reste',
        'permis_id',
        'candidat_id',
    ];

    public function permis()
    {
        return $this->belongsTo(Permis::class);
    }

    public function candidat()
    {
        return $this->belongsTo(Condidat::class);
    }
}
