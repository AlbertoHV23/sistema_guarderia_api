<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'lastname',
        'CURP',
        'NSS',
        'mail',
        'imagen',
        'gender',
        'rol_id',

    ];
}
