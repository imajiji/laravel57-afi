<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //belongsTo設定
    public function post()
    {
        return $this->belongsTo('App\Post')->orderBy('rate');
    }
}
