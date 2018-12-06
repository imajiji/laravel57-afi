<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //hasMany設定
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
