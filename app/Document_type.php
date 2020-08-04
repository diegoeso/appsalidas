<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_type extends Model
{
    public function users()
    {
        return $this->hasMany(User::class, 'document_type');
    }
}
