<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Authenticatable
{
    use HasFactory;


    protected $fillable = [
        'EmailParticipant',
        'PasswordParticipant',
    ];

    protected $hidden = [
        'PasswordParticipant',
    ];

    protected $primaryKey = 'id';
    protected $table = 'participants';
}
