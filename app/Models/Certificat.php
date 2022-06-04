<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    use HasFactory;

    protected $fillable = [
        'NomDeAC',
        'idCertif',
        'NumDeSerie',
        'DuréeValidate',
        'ParametreClée',
    ];

}
