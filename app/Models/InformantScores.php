<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformantScores extends Model
{
    //
    use HasFactory;
    protected $table = 'informant_scores';
    protected $fillable = [
        'informant_id',
        'question_id',
        'score',
    ];
}
