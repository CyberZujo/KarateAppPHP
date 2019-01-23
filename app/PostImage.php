<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    //
    protected $fillable = ['cover_image','post_id'];

    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
