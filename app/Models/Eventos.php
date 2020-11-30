<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $fillable = [
    	'nombre',
        'paterno',
        'materno',
        'edad',
        'dia',
        'evento',
    ];

    protected $table = 'servicios';
    use HasFactory;
}
