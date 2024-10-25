<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Campos que devem ser ocultados ao serem convertidos para arrays ou JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Campos que devem ser convertidos para tipos específicos
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

