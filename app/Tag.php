<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
            // function many to many
        return $this->belongsToMany("App\Post");
    }
}
