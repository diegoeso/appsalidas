<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function profile_image()
    {
        return $this->hasOne(ProfileImage::class, 'user_id');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users')->withPivot('active');
    }
    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'participants')->withPivot('active');
    }
}
