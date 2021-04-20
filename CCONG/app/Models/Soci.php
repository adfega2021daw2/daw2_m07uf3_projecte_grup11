<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soci extends Model
{
    use HasFactory;
    protected $fillable = [        
        'nif',         
        'noms',         
        'cognoms',         
        'adressa',         
        'poblacio',         
        'comarca',         
        'telefon',         
        'movil',         
        'email',
        'alta',
        'quota',
        'aportacions',
        'anual',
        'nom_ong'
    ];

    public $timestamps = false;
}
