<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table = 'likes';

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function image(){
        return $this->belongsTo('App\Images','image_id');
    }
}
