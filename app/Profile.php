<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Authenticatable
{
    use Notifiable;

    protected $guard = 'profile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profileInfo()
    {
        return $this->hasOne(ProfileInfo::class, 'profile_id');
    }

    public function communities(){
        return $this->hasMany(Community::class);
    }
    public function answers(){
        return $this->hasMany(Answers::class);
    }
    
}
