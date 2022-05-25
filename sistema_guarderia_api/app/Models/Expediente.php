<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $table = 'medic_cards';

    protected $fillable = [
        'weight',
        'height',
        'blood_type',
        'allergies',
        'medicines',
        'vaccines',
        'kid_id',

    ];
}
