<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //belongsToMany設定
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categories');
    }

    public function urls()
    {
        return $this->belongsToMany('App\Urls');
    }
}
