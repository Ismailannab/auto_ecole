<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    use HasFactory;

    protected $fillable = [
        'resultat', 
        'exam_id', 
        'permis_id', 
        'condidat_id'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function permis()
    {
        return $this->belongsTo(Permis::class);
    }

    public function condidat()
    {
        return $this->belongsTo(Condidat::class);
    }
}
