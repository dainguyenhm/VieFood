<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $guard = 'admin';

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone',
        'address',
        'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
