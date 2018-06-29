<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function comments(){

        return $this->hasMany('App\Comment', 'post_id', 'id');
    }

    protected $table = 'posts';
}
