<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    public function chapters()
    {
        return $this->hasMany('App\Chapter', 'manga_id', 'manga_id');
    }
}
