<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [];

    //RELATION
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'topic_tags');
    }
}
