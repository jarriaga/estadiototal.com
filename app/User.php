<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    CONST ROLE_ADMIN = 0;
    CONST ROLE_PLAYER = 1;
    CONST ROLE_REFEREE = 2;

    public static  $roles_name = [
                            self::ROLE_ADMIN => 'Administrador',
                            self::ROLE_PLAYER=> 'Ju',
                            self::ROLE_REFEREE=> 'referee'
                        ];
    const ROLES_CLASS = [
        self::ROLE_ADMIN => 'admin',
        self::ROLE_PLAYER=> 'player',
        self::ROLE_REFEREE=> 'referee'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','facebookId','profileImage',
        'aboutMe','country', 'state','city','city2','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
