<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    //RELATION
    public function topics()
    {
        return $this->belongsToMany(Topic::class,'topic_tags');
    }

    //ATTRIBUTE
    public function getTopicCountAttribute()
    {
        return $this->topics()->count();
    }
}
