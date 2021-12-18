<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = ['user_id','image_path','description'];

    public function comments(){
        return $this->hasMany('App\Comments')->orderBy('id','desc');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function likes(){
        return $this->hasMany('App\Likes')->orderBy('id','desc');
    }
}
