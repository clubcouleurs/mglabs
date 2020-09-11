<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Sofa\Eloquence\Eloquence; // base trait
use Sofa\Eloquence\Mappable; // extension trait

class User extends Authenticatable
{
    use Notifiable;
    use Eloquence, Mappable;

        protected $table = 'wp_users';

        protected $maps = [
            // legacy db with badly named columns
            'email' => 'user_email',
            'password' => 'user_pass',
        ];

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded= [] ;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
