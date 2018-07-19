<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{
    public function comments(){

        return $this->hasMany('App\Comment', 'post_id', 'id');
    }

    protected $table = 'posts';

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
