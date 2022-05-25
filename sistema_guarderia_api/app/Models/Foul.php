<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foul extends Model
{
    use HasFactory;

    protected $table = 'fouls';

    protected $fillable = [
        'reason',
        'description',
        'kid_id',
    ];
}
