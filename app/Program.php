<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function faculty()
    {
        return $this->BelongsTo(Faculty::class, 'id_faculty');
    }
}
