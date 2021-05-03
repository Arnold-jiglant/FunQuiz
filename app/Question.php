<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    //SCOPE
    /*
     * Question Filter
     * */
    public function scopeFilter($q, $filter)
    {
        return $q->where('body', 'like', "%$filter%")->orderByDesc('created_at');
    }

    //RELATION
    /*
     * IMAGE
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'owner');
    }
}
