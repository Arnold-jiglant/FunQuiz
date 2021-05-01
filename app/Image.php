<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    //RELATION
    public function owner()
    {
        return $this->morphTo();
    }
}
