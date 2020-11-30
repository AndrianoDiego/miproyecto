<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesionees extends Model
{
    protected $fillable = [
    	'nombre',
        'paterno',
        'materno',
        'email',
        'edad',
        'fecha',
        'albunes',
    ];

    protected $table = 'sesiones';

    use HasFactory;
}
