<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // function many to many
    public function tags()
    {
        return $this->belongsToMany("App\Tag");
    }
}
