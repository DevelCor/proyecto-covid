<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    use HasFactory;

    protected $table = 'illness';

    protected $fillable = [
        'name',
        'diagnostic',
        'attented',
        'fever',
        'skin_rashes',
        'muscleaches',
        'cough',
        'headaches',
        'vomit',
        'extra_symptoms',
        'user_id',
    ];
}
