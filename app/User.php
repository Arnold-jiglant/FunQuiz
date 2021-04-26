<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;


    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'verified_at' => 'datetime',
    ];

    /* ATTRIBUTES */
    public function getIsActiveAttribute()
    {
        return $this->status == User::STATUS_ACTIVE;
    }

    /* SCOPE */

    //Users
    public function scopeUsers($q)
    {
        return $q->where('role_id', Role::ADMIN);
    }

    //Players
    public function scopePlayers($q)
    {
        return $q->where('role_id', Role::PLAYER);
    }

    //Filter
    public function scopeFilter($q, $filter)
    {
        return $q->where('username', 'like', "%$filter%")
            ->orWhere('email', 'like', "%$filter%")
            ->orWhere('phone', 'like', "%$filter%")
            ->orderByDesc('created_at');
    }
}
