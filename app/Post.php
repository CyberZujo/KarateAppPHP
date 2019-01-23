<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function post_images()
    {
        return $this->hasMany('App\PostImage');
    }
}
