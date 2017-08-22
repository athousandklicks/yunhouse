<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function tale()
    {
    	return $this->belongsTo('App\Tale');
    }
}
