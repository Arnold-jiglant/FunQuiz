<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public static $READ = 1;
    public static $UNREAD = 2;

    protected $guarded = [];
}
