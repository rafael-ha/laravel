<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function image(){
        return $this->belongsTo('App\Images','image_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
