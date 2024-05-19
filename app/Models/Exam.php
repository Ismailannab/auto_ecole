<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'exam_date',
        'candidat_id',
    ];

    
    public function candidat()
    {
        return $this->belongsTo(Condidat::class,'candidat_id');
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }
}
