<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users')->withPivot('active');
    }
}
