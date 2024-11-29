<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informants extends Model
{
    //
    use HasFactory;
    protected $table = 'informants';
    protected $fillable = [
        'informant_name',
        'informant_age',
        'related',
        'HN',
        'patient_age'
    ];

}
