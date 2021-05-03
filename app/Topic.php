<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [];


    //SCOPE
    /*
     * Topic Filter
     * */
    public function scopeFilter($q, $filter)
    {
        return $q->where('name', 'like', "%$filter%");
    }

    //RELATION

    /*
     * Tags
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'topic_tags');
    }

    /*
     * Topic Creator
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /*
     * Topic Followers
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'subscribes');
    }

    /*
     * Topic Questions
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /*
     *IMAGE
     */

    public function image()
    {
        return $this->morphOne(Image::class, 'owner');
    }

}
