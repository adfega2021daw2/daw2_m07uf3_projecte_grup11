<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treballador extends Model
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
        'ingres',         
        'tipus',         
        'carrec',         
        'sou',         
        'seg_social',
        'irpf',         
        'edat',         
        'profesio',         
        'hores',
        'nom_ong'         
   
    ];
    public $timestamps = false;
}
