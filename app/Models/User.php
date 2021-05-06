<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'email',
        'user_name',
        'password',
        'user_image_route',
        'user_image_name',
        'role_id',
        'user_state',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->hasOne('App\Models\Role','role_id','role_id');
    }
}
