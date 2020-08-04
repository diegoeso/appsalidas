<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function programs()
    {
        return $this->hasMany(Role::class, 'id_faculty');
    }
}
