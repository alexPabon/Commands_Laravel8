<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    protected $table='calculations';

    protected $fillable=[
        'numero1',
        'numero2',
        'operacion',
        'resultado',
        'inicio',
        'fin'
    ];
}
