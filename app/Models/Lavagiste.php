<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lavagiste extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'logo',
        'tel',
        'heur_deb',
        'heur_fin',
        'date_repo',
        'etat',
        'adress',
        'long',
        'lat',
        'ville',
        'email',
        'password',
    ];
}
