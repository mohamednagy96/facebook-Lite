<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category','cate_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','posts_id');
    }
}
